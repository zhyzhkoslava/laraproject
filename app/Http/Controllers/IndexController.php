<?php

namespace App\Http\Controllers;

use App\Product;
use App\Product_image;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;



class IndexController extends Controller
{
    public function index() {

        $products = Product::all();

        $product = Product::with('product_images')->find(1);
        $img = $product->product_images;


//        foreach($products as $product) {
//            foreach($product->product_images as $image) {
//                echo $image->source_img."<br>";
//            }
//        }

        dd($product);


        return view('welcome')->with(['products'=>$products, 'product_images'=>$img]);


    }
}
