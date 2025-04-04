<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = [
        'total_price',
    ];
    public function transactionDetails()
    {
        return $this->hasMany(TransactionDetail::class);
    }
}
