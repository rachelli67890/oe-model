<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class FootCategory extends Model
{

    protected $guarded = [];

    public function foot()
    {
        return $this->hasMany(Foot::class,'cat_id','id');
    }
}
