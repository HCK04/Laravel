<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class homeController extends Controller{
    public function index(Request $request){
        dump($request->nom);
        return "Hello world!";
    }

    
}
