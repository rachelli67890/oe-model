<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function category()
    {
        return $this->belongsTo(Category::class,'cat_id','id');
    }
    
    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    public function setPriceAttribute($value)
    {
       $this->attributes['price'] = $value * 100;
    }

    public function productInfo()
    {
        return $this->hasMany(ProductInfo::class, 'product_id','id');
    }

}
