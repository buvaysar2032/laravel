<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();

        $products->each(function ($product) {
            $product->img_url = asset('storage/products/' . $product->img);
        });

        return response()->json($products);
    }
}
