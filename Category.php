<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function product()
    {
        return $this->hasMany(Product::class, 'cat_id', 'id');
    }
    
}
