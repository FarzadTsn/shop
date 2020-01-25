<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable=['title','display_name'];

    public function products(){
        return $this->belongsToMany(Product::class,'categories_to_products');
    }
}

