<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;

class HomeController extends Controller
{
    public function index()
    {
        // Flash Sale Products
        $flashSales = Product::where('flash_sale', 1)
            ->take(4)
            ->get();

        // All Categories
        $categories = Category::all();

        // Best Selling Products
        $bestSelling = Product::orderByDesc('sold')
            ->take(4)
            ->get();

        // Featured Products
        $featuredProducts = Product::where('featured', 1)
            ->take(8)
            ->get();

        return view('home', compact(
            'flashSales',
            'categories',
            'bestSelling',
            'featuredProducts'
        ));
    }
}
