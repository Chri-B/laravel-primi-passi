<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index() {
        // prendiamo i dati del database passando tramite il Model
        $products = Product::all();
        dd($products);
        return view('prodotti');
    }
}
