<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\seller;

class SellerController extends Controller
{
    //

      public function index(){
        $sellers = seller::get();
        return $sellers;
    }
}
