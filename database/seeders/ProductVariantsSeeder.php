<?php

namespace Database\Seeders;

use App\Models\OptionValue;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductVariantsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $product = Product::where('id', 1)->first();
        $optionValueIds = OptionValue::pluck('id')->toArray();

        if ($product) {
            $variant = ProductVariant::create([
                'product_id' => $product->id,

            ]);

            // attach option values to the variant, will trigger SKU generation
            $variant->optionValues()->attach($optionValueIds);
        }
    }
}
