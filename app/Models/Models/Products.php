<?php

namespace App\Models\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
USE App\Models\Models\Category;

class Products extends Model
{
    public function category(){
        return $this->belongsTo('App\Models\Models\Category');
    }
}
