<?php
use App\Category;
use App\Product;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
	$cat=Category::all();
	$pro=Product::all();
    return view('index',["cat"=>$cat,"pro"=>$pro]);
});





Route::get('/Category/{id}',[
'uses' => 'CategoryController@edit',
'as'   =>'route.edit'
]
);
Route::post('/Category/add',[
'uses' => 'CategoryController@store',
'as'   =>'route.add'
]
);
Route::post('/Category/{id}',[
'uses' => 'CategoryController@update',
'as'   =>'route.update'
]
);
Route::get('/Category/Delete/{id}',[
'uses' => 'CategoryController@destroy',
'as'   =>'route.delete'
]
);
Route::get('/product/show/{slug}',[
'uses' => 'ProductController@showforuser',
'as'   =>'route.showslug'
]
);
Route::post('/add/cart',[
'uses'=>'ShopingController@addtocart',
'as'  =>'cart.add'
]);

Route::get('/cart/dec/{id}/{qte}',[
'uses'=>'ShopingController@cartdec',
'as'  =>'cart.dec'
]);
Route::get('/cart/inc/{id}/{qte}',[
'uses'=>'ShopingController@cartinc',
'as'  =>'cart.inc'
]);
Route::get('/cart/delete/{id}',[
'uses'=>'ShopingController@deletecart',
'as'  =>'cart.delete'
]);
Route::get('/user/regester',[
 'uses'=>'UserController@create',
 'as'=>'user.create'  
]);
Route::post('/user/regester',[
 'uses'=>'UserController@store',
 'as'=>'user.store'  
]);
Route::get('/user/login',[
 'uses'=>'UserController@login',
 'as'=>'login'  
]);
Route::post('/user/login',[
 'uses'=>'UserController@auth',
 'as'=>'user.auth'  
]);
Route::get('/user/logout',[
 'uses'=>'UserController@logout',
 'as'=>'user.logout'  
]);
Route::get('/cart',[
'uses'=>'ShopingController@cart',
'as'  =>'cart.index'
]);

Route::get('/User/checkout',[
'uses' => 'CheckoutController@index',
'as'   =>'cart.checkout'
]
);
Route::post('/User/pay',[
'uses' => 'CheckoutController@pay',
'as'   =>'cart.pay'
]
);

Route::resource('/product','ProductController');
Route::group(['middleware'=>'admin'],function(){

Route::get('/Category',[
'uses' => 'CategoryController@index',
'as'   =>'route.index'
]

);

});

