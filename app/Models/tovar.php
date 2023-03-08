<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tovar extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'img',
        'price',
        'year_of_production',
        'country_of_origin',
        'category_id',
        'model',
        'count',
    ];
    
    public function Cart(){
        return $this -> belongsTo(cart::class, 'product_id', 'id');
    }
}
