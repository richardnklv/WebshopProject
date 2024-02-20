<?php

namespace Database\Seeders;

use App\Models\OptionType;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionTypesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::where('id', 1)->first();

        // Color
        OptionType::create([
            'id' => 11,
            'product_id' => $product->id,
            'type' => 'Color',
        ]);

        // Size
        OptionType::create([
            'id' => 12,
            'product_id' => $product->id,
            'type' => 'Size'
        ]);
    }
}
