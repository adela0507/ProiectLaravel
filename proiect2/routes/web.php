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

Route::get('/', function () {
    return view('welcome');
});
/*Route::middleware(['auth','is_admin'])->group(function(){
    Route::resource('/clients',ClientsController::class);
});*/
Route::get('/','TaskController@index');
Route::resource('tasks','TaskController');
Auth::routes();
/*Route::group(['prefix'=>'admin','middleware'=>['auth','admin']], function(){
    Route::get('/','ClientsController@index');
    Route::resource('clients','ClientsController');    Route::get('/',function(){
        return view('admin.index');
    })->name('admin.index');
});*/
Route::get('/','ProductController@index');
Route::resource('product','ProductController');
Route::get('/','ProductsController@index');
Route::resource('products','ProductsController');
Route::get('/admin','ClientsController@index');
Route::resource('clients','ClientsController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'ProductsController@index');
Route::get('/starecomanda', 'StarecomandaController@index');
Route::get('cart', 'ProductsController@cart');
Route::get('add-to-cart/{id}', 'ProductsController@addToCart');
Route::patch('update-cart', 'ProductsController@update');
Route::delete('remove-from-cart', 'ProductsController@remove');

