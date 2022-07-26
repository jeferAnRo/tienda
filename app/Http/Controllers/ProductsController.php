<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use  App\Models\Models\Products;
use  App\Models\Models\Category;


class ProductsController extends Controller

{
    public function  __construct()
    {   $this->middleware('auth');
        // $this->middleware('can:dmin.products.index')->only('index');
        // $this->middleware('can:dmin.products.index')->only('update');
        // $this->middleware('can:admin.products.store')->only('store');
        // $this->middleware('can:admin.products.delete')->only('delete');
    }
    
    public function index()
    {
        $products = Products::all();
        $categories = Category::all();
        return view('admin/products/index', [
            'products'=> $products,
            'categories' => $categories 
        ]);
    }
     public function store(Request $request)
     {

        $newProducts =  new Products();

        if( $request->hasFile('featured') ) {
          $file = $request->file('featured');
            $destinationPath ='images/featureds/';
            $filename= time().'-'.$file->getClientOriginalName();
            $uploadSuccess =$request->file('featured')->move($destinationPath, $filename);
             $newProducts->featured = $destinationPath . $filename;
         }

        $newProducts = new Products();

       $newProducts->name = $request->name;
       $newProducts->category_id = $request->category_id;
       $newProducts->descripcion= $request->descripcion;
       $newProducts->precio = $request->precio;
     


    //  $newProducts->save();
       $newProducts->save();

      return redirect()->back();
      
        
     }

  public function update (Request $request , $productsid)
   {
      
   $products=Products::find($productsid);
     
     $products->name = $request->name;
     $products->descripcion= $request->descripcion;
     $products->precio= $request->precio;
      $products->save();
      return redirect()->back();
     
   }

     public function delete(Request $request, $productsId)
     {
         $products = Products::find($productsId);
         $products->delete();
        return redirect()->back();
  }
    
}

