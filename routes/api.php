<?php

use App\Models\Product;
use App\Models\Transaction;
use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/products', function () {
    $products = Product::all();
    $addImageProducts = $products->map(function ($product) {
        return collect($product)->put('image', asset('assets/images/'.$product->id.'.jpg'));
    });
    $response = [
        'message' => 'Berhasil mendapatkan data produk',
        'data' => $addImageProducts,
    ];
    return response()->json($response, 200);
});
Route::get('/transactions', function () {
    $tranactions = Transaction::with('transactionDetails.product')->get();

    $response = [
        'message' => 'Berhasil mendapatkan data transaksi',
        'data' => $tranactions,
    ];
    return response()->json($response, 200);
});
Route::post('/checkout', function (Request $request) {
    $totalPrice = 0;
    foreach ($request->items as $item) {
        $product = Product::where('id', $item['id'])->first();
        if ($product) {
            $totalPrice += $product->price * $item['qty'];
        }
    }
    $transactionParams = [
        'total_price' => $totalPrice,
    ];
    if($totalPrice == 0){
        return response()->json(['message' => 'Tidak ada produk yang dibeli!', 'total_price' => $totalPrice], 400);
    }
    $tranaction = Transaction::create($transactionParams);

    foreach ($request->items as $item) {
        $product = Product::where('id', $item['id'])->first();
        TransactionDetail::create([
            'transaction_id' => $tranaction->id,
            'product_id' => $product->id,
            'price' => $product->price,
            'quantity' => $item['qty'],
        ]);
    }

    return response()->json(['message' => 'Berhasil Checkout!', 'total_price' => $totalPrice], 200);
});
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
