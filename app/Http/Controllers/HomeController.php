<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Models\Category;
use App\Models\Models\Products;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
       $categories = Category:: all();
       $product = Products ::all();
       
       return view('home',[
        'categories'=>$categories,
        'product'=>$product,
    
    ]);
    }
    
    public function ProductsByCategory($category)
    
    {
    
    $categories = Category:: all();
   

    $category = Category::where('name','=',$category)->first();
    $categoryIdSelected=$category->id;
    $product = Products:: where('category_id', '=' ,$categoryIdSelected)->get();
     
    return view('home',[
        'categories'=>$categories,
        'product'=>$product,
        'categoryIdSelected'=>$categoryIdSelected
    
    ]);
    }

    public function detalles(Products $product){

        $productdetalle = $product->load('category');
        
        return view('detalles', compact('productdetalle')  );
       
    }
}

