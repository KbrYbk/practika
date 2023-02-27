<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function about(){
        $p=\App\Models\product::OrderBy('id','desc')->limit(5)->get();
        return view ('about', ['prod'=>$p]);
    }
}
