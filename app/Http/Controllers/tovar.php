<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovar extends Controller
{
    public function aboutus(){   // Страница о нас "/aboutus"
        $x=\App\Models\tovar::OrderBy('id','desc')->limit(5)->get();
        return view ('aboutus', ['product'=>$x]);
    }
        public function catalog($name='id',$sort='desc'){   //каталог
        $x=\App\Models\tovar::OrderBy($name, $sort)->where('count','>','0')->get();
        $cat=\App\Models\tovar::all();
        return view ('catalog', ['product'=>$x]);
    }

}
