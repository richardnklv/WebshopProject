<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OptionType extends Model
{
    use HasFactory;

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }

    public function optionValues()
    {
        return $this->hasMany(OptionValue::class);
    }
}
