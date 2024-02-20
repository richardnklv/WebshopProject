<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductVariantOptions extends Model
{
    use HasFactory;

    public function variant()
    {
        return $this->belongsTo(ProductVariant::class);
    }
}
