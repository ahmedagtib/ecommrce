<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use Stripe\Stripe;
use Stripe\Charge;


class CheckoutController extends Controller
{
    public function index(){
    	return view('User.checkout');
    }
    public function pay()
    {
    	 Stripe::setApiKey('');
    	 $token =request()->stripeTokrn;
         $charge =Charge::create(['amount' => Cart::total(), 'currency' => 'usd','description'=>'ecosafi' ,'source' =>  $token]);
          Cart::destroy();
          return redirect('cart.index')->with('success','commend pa');
    }
}
