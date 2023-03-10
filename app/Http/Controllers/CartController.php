<?php

namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index()
    {
        $cart = session()->get('cart');
        $total = $this->getTotal();
        return view('cart.index', compact('cart', 'total'));
    }

    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);
        session()->push('cart', [
            'product_id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1
        ]);
        return redirect()->back();
    }

    public function update(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->index]['quantity'] = $request->quantity;
        session()->put('cart', $cart);
        $total = $this->getTotal();
        return view('cart.cart', compact('cart', 'total'));
    }

    public function remove(Request $request)
    {
        $cart = session()->get('cart');
        unset($cart[$request->index]);
        session()->put('cart', $cart);
        $total = $this->getTotal();
        return view('cart.cart', compact('cart', 'total'));
    }

    public function increment(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->index]['quantity']++;
        session()->put('cart', $cart);
        return redirect()->back();
    }

    public function decrement(Request $request)
    {
        $cart = session()->get('cart');
        $cart[$request->index]['quantity']--;
        if ($cart[$request->index]['quantity'] <= 0) {
            unset($cart[$request->index]);
        }
        session()->put('cart', $cart);
        return redirect()->back();
    }

    private function getTotal()
    {
        $cart = session()->get('cart');
        $total = 0;
        foreach ($cart as $item) {
            $total += $item['price'] * $item['quantity'];
        }
        return $total;
    }
}