<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\product;

class ProductController extends Controller
{
    //
      public function index(){
        $products = product::get();
        return $products;
    }
}
