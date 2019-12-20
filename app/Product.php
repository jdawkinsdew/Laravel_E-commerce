<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    public function orders()
    {
        return $this->hasMany('App\Order', 'product_id');
    }
    public function category()
    {
        return $this->belongsTo('App\Category', 'category_id');
    }
}
