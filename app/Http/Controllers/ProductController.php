<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Product;

class ProductController extends Controller
{
    /**
     * Save product data
     */
    public function newProduct(Request $request){
      $product = new Product;
      $product->name = $request->name;
      $product->description = $request->description;
      $product->price = $request->price;

    }

    public function getProduct($id){

    }
}
