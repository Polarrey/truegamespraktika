<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    public function Product() {
        return $this -> hasMany(product::class, 'product_id' , 'id');
    }
}
