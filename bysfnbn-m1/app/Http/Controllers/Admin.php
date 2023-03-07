<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\categories;
use App\Models\product;

class Admin extends Controller
{
    public function admin()
    {
        $prod = product::all();
        $cat = categories::all();
        return view('admin', ['prod' => $prod, 'cat' => $cat]);
    }
    //переотправка на форму создания товара
    // public function form()
    // {
    //     $cat = categories::all();
    //     return view('createprod', ['cat' => $cat]);
    // }
    //отправка данных в базу
    // public function maketovar(Request $request)
    // {
    //     $file = $request->file('img');
    //     $filename = $file->getClientOriginalName();
    //     $file->move(public_path('img'), $filename);


    //     product::create([
    //         'name' => $request->input('name'),
    //         'img' => $filename,
    //         'price' => $request->input('price'),
    //         'year' => $request->input('year'),
    //         'country' => $request->input('country'),
    //         'category' => $request->input('category'),
    //         'model' => $request->input('model'),
    //         'count' => $request->input('count')
    //     ]);

    //     return redirect(route('admin'));
    // }
    public function proddel($id)
    {
        product::where('id', $id)->delete();
        return redirect(route('admin'));
    }
}
