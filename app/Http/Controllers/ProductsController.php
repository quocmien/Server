<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductsController extends Controller
{
    
    public function index()
    {
        $products = Products::all();
        return response()->json($products);
    } 

    public function show(string $slug)
    {
        $product = Products::where('slug', $slug)->first();
        return $product;
    }
}
