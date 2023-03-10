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
    //  Отправка на форму создания товаров
    public function form()
    {
        $cat = categories::all();
        return view('makeprod', ['cat' => $cat]);
    }
    // отправка данных в базу товар
    public function maketovar(Request $request)
    {
        $file = $request->file('img');
        $filename = $file->getClientOriginalName();
        $file->move(public_path('img'), $filename);


        product::create([ //внести в поля базы
            'name' => $request->input('name'),
            'img' => $filename,
            'price' => $request->input('price'),
            'year' => $request->input('year'),
            'country' => $request->input('country'),
            'category' => $request->input('category'),
            'model' => $request->input('model'),
            'count' => $request->input('count')
        ]);

        return redirect(route('admin')); //возвращает на страницу админа
    }

    // отправка новой категории в базу
    public function makecategory(Request $request)
    {
        categories::create([ //внести в поля базы

            'name' => $request->input('name')
        ]);
        return redirect(route('admin')); //возвращает на страницу админа
    }
    public function proddel($id) //удалить товар
    {
        product::where('id', $id)->delete();
        return redirect(route('admin')); //возвращает на страницу админа
    }

    public function categoriesdel($id) //удалить категорию
    {
        categories::where('id', $id)->delete();
        return redirect(route('admin')); //возвращает на страницу админа
    }

    public function prod()
    {
        $cat = categories::all();
        return view('createprod', ['cat' => $cat]);
    }
}
