<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function about(){ //о нас
        $p=\App\Models\product::OrderBy('id','desc')->limit(5)->get();
        return view ('about', ['prod'=>$p]);
    }

    public function catalog($name='id',$sort='desc'){ //каталог
        $tovar=\App\Models\product::OrderBy($name, $sort)->where('count','>','0')->get();
        $cat=\App\Models\product::all();
        return view ('catalog', ['prod'=>$tovar, 'cat'=>$cat]);
    }
    public function filtr($id){ //фильтр
        $prod =\App\Models\product::where('category', $id)->get();
        $cat=\App\Models\product::all();
        return view ( ['prod' => $prod,'catalog','cat'=>$cat]);
    }
}
