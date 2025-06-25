<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\dog;

class DogController extends Controller
{
    //
    public function index(){
        $dogs = dog::all();
        // return $dogs;
return response()->json($dogs)  ;
    }
}
