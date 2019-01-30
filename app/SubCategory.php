<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    public $timestamps = false;


    public function products()
    {
        return $this->hasMany('App\Product', 'subcategory_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

}
