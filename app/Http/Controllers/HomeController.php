<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display the home page content.
     */
    public function index()
    {
        $products = Product::with('primaryImage')->limit(10)->get();


        return view('home', compact('products'));
    }
}