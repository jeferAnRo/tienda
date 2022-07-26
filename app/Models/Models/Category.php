<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Models\Products;

class Category extends Model
{
    public function products(){
        return $this->hasMany('App\Models\Models\Products');
    }
};
