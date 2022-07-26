<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Models\Category ;

class CategoriesController extends Controller
{
    public function  __construct()
    {
        $this->middleware('auth');
    //     $this->middleware('can:dmin.categories.update')->only('update');
    //     $this->middleware('can:admin.categories.store')->only('store');
    //     $this->middleware('can:admin.categories.delete')->only('delete');
     }
    public function index()
    {
        $categories = Category::all();
        return view('admin/categories/index', ['categories'=> $categories]);
    }
    public function store(Request $request)
    {
      
      $newCategory = new Category();

      $newCategory->name = $request->name;
      $newCategory->save();

     return redirect()->back();
     
        
    }
    public function update (Request $request , $categoryid)
    {
      
    $category=Category::find($categoryid);
     
      $category->name = $request->name;
      $category->save();

     return redirect()->back();
     
        
    }

    public function delete(Request $request, $categoryId)
    {
        $category = Category::find($categoryId);
        $category->delete();
        return redirect()->back();
    }
    
}
