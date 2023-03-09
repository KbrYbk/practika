<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\product;

class BasketShop extends Controller
{
    public function index()
    {
        $user_id = auth()->id();

        $cart_items = Basket::where('user_id', $user_id)
<<<<<<< HEAD
            ->get();
=======
            ->join('products', 'baskets.product_id', '=', 'products.id')
            ->get(['products.*']);
>>>>>>> 3c259c04aaa426ebd4405d1b71afaadd462e6534

        return view('basket', compact('cart_items'));
    }

    public function make($product_id)
    {
        $user_id = auth()->id();

        Basket::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
        ]);

        return redirect()->route('cart.index');
    }

    public function delete($cart_id)
    {
        Basket::findOrFail($cart_id)->delete();

        return redirect()->route('cart.index');
    }
}
