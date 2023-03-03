<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function about()
    { //о нас
        $p = \App\Models\product::OrderBy('id', 'desc')->limit(5)->get();
        return view('about', ['prod' => $p]);
    }

    public function catalog($name = 'id', $sort = 'desc')
    { //каталог
        $tovar = \App\Models\product::OrderBy($name, $sort)->where('count', '>', '0')->get(); //вывод всего товара в наличии
        $cat = \App\Models\product::all();
        return view('catalog', ['prod' => $tovar, 'cat' => $cat]);
    }

    public function filtr($id)
    { //фильтр
        $tovar = \App\Models\product::where('category', $id)->get(); //вывод только со столбика категории
        $cat = \App\Models\categories::all();
        return view(['catalog', 'prod' => $tovar, 'cat' => $cat]);
    }
}
