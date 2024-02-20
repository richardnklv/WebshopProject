<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'id' => 1,
            'base_sku' => 'PROD1',
            'name' => 'Red bull chair',
            'description' => 'Lorem ipsum.',
            'base_price' => 999.99,
        ]);
    }
}
