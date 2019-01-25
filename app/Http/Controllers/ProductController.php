<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product=Product::all();
       
       return view('Admin.product.index',['product'=>$product]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $cat=Category::all();
        return view('Admin.product.add',["cat"=>$cat]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $file=$request->file('img');
       $name=$file->getClientOriginalName();
       $file->move(public_path().'/images/',$name);
        $product =new Product();
        $product->Category_id=$request->cat;
        $product->title=$request->title;
        $product->price=$request->prix;
        $product->img=$name;
        $product->description=$request->description;
        $product->save();
        return redirect()->route('product.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pro=Product::find($id);
        return View('Admin.product.show',["pro"=>$pro]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pro=Product::find($id);
        $cat=Category::all();
        return   View('Admin.product.edit',["pro"=>$pro,"cat"=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {    
         
    
        $pro=Product::find($id);
         $pro->Category_id=1;
         $pro->title=$request->title;
         $pro->price=$request->prix;
         if($request->has('img'))
         {
           $file=$request->file('img');
           $name=$file->getClientOriginalName();
           $file->move(public_path().'/images/',$name);
            $pro->img=$name;
         }
         $pro->description=$request->description;
         $pro->save();
         return redirect()->route('product.index');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pro=Product::find($id);
        $pro->delete();
        return redirect()->route('product.index');
    }
    public function showforuser($slug){
        $cat=Category::all();
        $prod=Product::where('slug',$slug)->first();
        return view('User.show',["prod"=>$prod,"cat"=>$cat]);
    }
}
