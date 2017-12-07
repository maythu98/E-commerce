<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = "products";
    protected $fillable = ['name', 'price', 'stock', 'description',
     'image1', 'image2', 'image3', 'featured_image', 'is_featured'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category');
    }
}
