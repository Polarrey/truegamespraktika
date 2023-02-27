<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovar extends Controller
{
    public function about(){
        $p=\App\Models\tovar::OrderBy('id','desc')->limit(5)->get();
        return view ('about', ['prod'=>$p]);
    }
    public function catalog(){
        $p=\App\Models\tovar::OrderBy('id','desc')->get();
        return view ('catalog', ['prod'=>$p]);
    }
}
