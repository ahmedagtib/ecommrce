<?php

namespace App\Http\Controllers;
use Cart;
use App\Product;
use Illuminate\Http\Request;


class ShopingController extends Controller
{
    public function addtocart(Request $request)
    {
       $product=Product::findorfail($request->id);
       $item=Cart::add([
         'id'=>$product->id,
         'name'=>$product->title,
         'qty'=>$request->qte,
         'price'=>$product->price,
       ]);	
       Cart::associate($item->rowId,'App\Product');
       return redirect()->route('cart.index');
    }
     public function cart()
    {
    	return View('User.cart');
    }
     public function deletecart($id)
    {
    	Cart::remove($id);
        return redirect()->back();
    }
     public function cartdec($id,$qte)
    {
    	Cart::update($id,$qte-1);
    	return redirect()->back();
    }
      public function cartinc($id,$qte)
    {
    	Cart::update($id,$qte+1);
    	return redirect()->back();
    }
}
