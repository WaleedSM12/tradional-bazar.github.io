<?php

namespace App\Http\Controllers\Website;

use App\Http\Controllers\Controller;
use App\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() {
        $products = Product::inRandomOrder()->take(8)->get();
        // dd($products);
        return view('website.pages.index', [
            'products' => $products
        ]);
    }
}
