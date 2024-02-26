<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    public function foodBaverage(){
        return view('products.foodbaverage');
    }

    public function beautyHealth(){
        return view('products.beauty_health');
    }

    public function homeCare(){
        return view('products.home_care');
    }

    public function babyKid(){
        return view('products.baby_kid');
    }
}