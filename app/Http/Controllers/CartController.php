<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function addbtn($id) {
        $cart = \App\Models\Cart::Where('id', "=", $id) -> get();
        $cart[0] -> count++;
        $cart[0] -> save();
        return redirect('/cart');
    }
    public function removebtn($id) {
        $cart = \App\Models\Cart::Where('id', "=", $id) -> get();
        $cart[0] -> count--;
        if ($cart[0]->count < 1) {
            $cart[0] -> delete();
        }
        else
            $cart[0] -> save();
        return redirect('/cart');
    }
    public function removeall($id) {
        $cart = \App\Models\Cart::find($id);
        $cart -> delete();
        // dd($cart);
        return redirect('/cart');
    }
}
