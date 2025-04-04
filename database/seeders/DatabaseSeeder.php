<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Product::insert([
            [
                'name' => 'Keyboard 1st Player DK 6.0',
                'description' => '(Tenkeyless) Gaming Mechanical Keyboard 87 Keys Layout (Blue Switch)',
                'price' => 600000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Keyboard 1st Player THE ONE',
                'description' => 'Wireless Mechanical Keyboard CJ Silver Switch',
                'price' => 2000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mouse Rapo M300 White',
                'description' => 'Multi-mode Wireless Silent Optical Mouse',
                'price' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Mouse Rapo M300 Black',
                'description' => 'Multi-mode Wireless Silent Optical Mouse',
                'price' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PC Rakitan EK Gaming BattleFragment',
                'description' => '166Ti - Core i5 GTX 1660 Ti',
                'price' => 8000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'PC Rakitan EK Gaming BattleForteer',
                'description' => '406 Basic - Ryzen 5 RTX 4060',
                'price' => 13000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Lenovo Legion R27fc-30 27inc',
                'description' => 'FHD 240Hz (O/C 280Hz) Curved Gaming Monitor',
                'price' => 3500000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Monitor SAMSUNG S24DG302 24inc',
                'description' => 'Odyssey G3 FHD Gaming Monitor 180Hz',
                'price' => 2000000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
