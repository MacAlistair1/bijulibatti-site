<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public $timestamps = false;

    public function subcategories()
    {
        return $this->hasMany('App\SubCategory', 'category_id', 'id');
    }

    public function products()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }

}
