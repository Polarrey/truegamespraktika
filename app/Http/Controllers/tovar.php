<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;

class tovar extends Controller
{
    public function aboutus(){   // Страница о нас "/"
        $x=\App\Models\tovar::OrderBy('id','desc')->limit(5)->get();
        return view ('aboutus', ['product'=>$x]);
    }
        public function catalog($name='id',$sort='desc'){   // Страница каталог "/catalog"
        $x=\App\Models\tovar::OrderBy($name, $sort)->where('count','>','0')->get();
        $cat=\App\Models\category::all();
        return view ('catalog', ['product'=>$x]);
    }
    public function filter($id){       //  Фильтр (статик)
        $x =\App\Models\tovar::where('category', $id)->get();
        $cat=\App\Models\category::all();
        return view ('catalog', ['product'=>$x,'cat'=>$cat]);
    }
    public function category($id){       //  Категории товаров (Видеоигры, консоли и девайсы)
        $x =\App\Models\tovar::where('count','>',0)->where('category_id',$id)->get();
        $categories=\App\Models\category::all();
        return view ('catalog', ['product'=>$x,'cat'=>$categories]);
    }
    public function oneproduct($id){   // Страница о нас "/"
        $x=\App\Models\tovar::where('id', $id)->get();
        return view ('singleproduct', ['product'=>$x]);
    }
}
