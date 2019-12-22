<?php

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





/*
|--------------------------------------------------------------------------
| Danial Changes
|--------------------------------------------------------------------------
|

Route::get('/index', function () {
    return view('js.index');
});
*/



Route::get('/dashboard', 'load_images@getImages')->middleware('auth');



/*
|--------------------------------------------------------------------------
| Danial Changes END
|--------------------------------------------------------------------------
*/







// Route::get('/dashboard', function () {
//     return view('dasboard');
// });

Route::resource('products', 'ProductController'); 
Route::get('/getImages', 'load_images@getImages');


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/','load_images@getImages');
Route::get('/index','load_images@getImages');
Route::get('/about','PagesController@getabout');
Route::get('/blog','PagesController@getblog');
Route::get('/cart','getcartdata@getcartitems');
Route::get('/checkout','PagesController@getcheckout');
Route::get('/contact','PagesController@getcontact');
Route::get('/shop','PagesController@getshop');

//Route::get('/index', 'load_images@getImages');
//Route::get('/delete/{id}', 'load_images@delete');
Route::POST('/insert', 'cartController@addtocart');
Route::POST('/addtocart','cartController@addtocart');

Route::get('/add/products','PagesController@createProduct');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/insertdata', function () {
    return view('insert');
});
