<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class IndexController extends Controller
{
    public function index() {


        $products = Product::with('product_images')->get();

        return view('welcome')->with(['products'=>$products]);

    }
}
