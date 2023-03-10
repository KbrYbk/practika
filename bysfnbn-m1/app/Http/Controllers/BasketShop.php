<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Basket;
use App\Models\product;
use Illuminate\Support\Facades\Auth;

class BasketShop extends Controller
{
    public function index()
    {
        $user_id = auth()->id();

        $cart_items = Basket::where('user_id', $user_id)
            ->get();

        return view('basket', compact('cart_items'));
    }

    public function make($product_id)
    {
        $user_id = auth()->id();
        $cart_item = Basket::where('user_id', $user_id)
            ->where('product_id', $product_id)
            ->first();

        if ($cart_item) {
            // If the product is already in the cart, increment its quantity
            $cart_item->count++;
            $cart_item->save();
        } else {
            // If the product is not in the cart, create a new cart item
            Basket::create([
                'user_id' => $user_id,
                'product_id' => $product_id,
            ]);
        }


        return redirect()->route('cart.index');
    }
    public function update(Request $request, $id)
    {
        $cart_item = Basket::where('id', $id)
            ->where('user_id', Basket::user()->id)
            ->firstOrFail();

        if ($request->input('count') > 0) {
            $cart_item->count = $request->input('count');
            $cart_item->save();
        } else {
            $cart_item->delete();
        }

        return redirect()->route('cart.index');
    }
    public function delete($cart_id)
    {
        Basket::findOrFail($cart_id)->delete();

        return redirect()->route('cart.index');
    }
}
