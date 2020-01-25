<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable=['title','description','mainprice','offprice','totalprice','size','color'];

    public function categories(){
        return $this->belongsToMany(Category::class,'categories_to_products');
    }
}
