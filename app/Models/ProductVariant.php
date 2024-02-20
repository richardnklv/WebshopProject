<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariant extends Model
{
    use HasFactory;

    public function optionValues()
    {
        return $this->belongsToMany(OptionValue::class,'product_variant_options', 'variant_id', 'option_value_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class);
    }

    public function calculatePrice()
    {
        $base_price = $this->product()->base_price;

        $additional_cost = $this->optionValues->sum('additional_cost');

        return $base_price + $additional_cost;
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($variant) {
            // set it if it hasn't been hard set
            if (empty($variant->sku)) {
                $variant->sku = $variant->generateSku();
            }
        });
    }

    public function generateSku()
    {
        // from product base_sku
        $baseSku = $this->product->base_sku;

        // generate option identifiers
        $optionIdentifiers = $this->optionValues->map(function ($optionValue) {
            // using method to generate short identifier for options
            return $optionValue->getIdentifier();
        })->implode('-');

        return $baseSku . '-' . $optionIdentifiers;
    }

}
