<?php

namespace App\Http\Controllers;

use \App\Models\tovar;
use \App\Models\category;
use Illuminate\Http\Request;

class adminpanel extends Controller
{
    public function admin()
    {
        $prod = tovar::all();
        $cat = category::all();
        return view('admin', ['prod' => $prod, 'cat' => $cat]);
    }

    public function proddel($id)
    {
        tovar::where('id', $id)->delete();
        return redirect(route('admin'));
    }
     public function catdel($id)
    {
        category::where('id', $id)->delete();
        return redirect(route('admin'));
    }

    public function prod()
    {
        $cat = category::all();
        return view('createprod', ['cat' => $cat]);
    }

    public function prodcreate(Request $request)
    {
        $file =$request->file('img_url');
        $filename= $file->getClientOriginalName();
        $file->move(public_path('img'),$filename);


        tovar::create([
            'name' => $request->input('name'),
            'img'=>$filename,
            'price' => $request->input('price'),
            'year' => $request->input('year'),
            'country' => $request->input('country'),
            'category_id'=>$request->input('category_id'),
            'model'=>$request->input('model'),
            'count'=>$request->input('category')
            ]);
        return redirect(route('admin'));
    }
    public function catcreate(Request $request)
    {
        category::create(
            [
                'name'=>$request->input('name')
            ]
        );
        return redirect(route('admin'));
    }
}
