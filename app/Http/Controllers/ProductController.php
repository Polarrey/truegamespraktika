<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function aboutus()
    { //о нас
        $x = \App\Models\product::OrderBy('id', 'desc')->limit(5)->get();
        return view('about', ['product' => $x]);
    }

    public function catalog($name = 'id', $sort = 'desc')
    { //каталог
        $x = \App\Models\product::OrderBy($name, $sort)->where('count', '>', '0')->get(); //вывод всего товара в наличии
        $cat = \App\Models\categories::all();
        return view('catalog', ['product' => $x, 'cat' => $cat]);
    }

    public function filterproduct($id)
    { //фильтр
        $x = \App\Models\product::where('category', $id)->where('count', '>', '0')->get(); //вывод только со столбика категории
        $cat = \App\Models\categories::all();
        return view('catalog', ['product' => $x, 'cat' => $cat]);
    }

    public function oneproduct($id)
    { //один товар
        $x = \App\Models\product::where('id', $id)->get();
        return view('singleproduct', ['product' => $x]);
    }
    
}
