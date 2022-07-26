<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use  App\Models\Models\Products;

class CartController extends Controller
{
          public function index()
          {
          
            return view('carrito');
          
            }
}
