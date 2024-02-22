<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    // Method to show a single product
    public function show($id)
    {
        // Retrieve the product by id with its related option types and option values
        $product = Product::with(['optionTypes.optionValues'])->findOrFail($id);
        // Return the product as a JSON response
        return response()->json($product);
    }
}
