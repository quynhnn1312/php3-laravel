<?php

use Illuminate\Support\Facades\Route;

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
// CLIENT
Route::namespace('Clients')->group(function (){

    Route::get('/','HomeController@index')->name('get.home');
    Route::get('/shop','ShopController@index')->name('get.shop');
    Route::get('/single-product','ShopController@singleProduct')->name('get.single.product');
    Route::get('/blog','BlogController@index')->name('get.blog');
    Route::get('/blog-detail','BlogController@blogDetail')->name('get.blog.detail');
    Route::get('/about','AboutController@index')->name('get.about');
    Route::get('/contact','ContactController@index')->name('get.contact');
    Route::get('/cart','CartController@listCart')->name('get.list.cart');
    Route::get('/checkout','CartController@checkout')->name('get.checkout');

    Route::get('/register',function (){
        return view('client.register');
    })->name('get.register');

    Route::get('/login',function (){
        return view('client.login');
    })->name('get.login');

    Route::get('/my-account',function (){
        return view('client.my-account');
    })->name('get.my-account');

    Route::get('/wishlist',function (){
        return view('client.wishlist');
    })->name('get.wishlist');

});
// ADMIN
Route::prefix('admin')->group(function (){
    Route::get('/','HomeController@index')->name('get.list.home');
// quản lý sản phẩm
    Route::get('/products','ProductController@index')->name('get.list.product');
    Route::get('/products/create','ProductController@create')->name('get.create.product');
    Route::post('/products/create','ProductController@store');
    Route::get('/products/edit/{id}','ProductController@edit')->name('get.edit.product');
    Route::post('/products/edit/{id}','ProductController@update');
    Route::get('/products/delete/{id}','ProductController@destroy')->name('destroy.product');
// quản lý danh mục
    Route::get('categories','CategoryController@index')->name('get.list.category');
    Route::get('categories/{id}/remove','CategoryController@delete')->name('cate.remove');
    Route::get('categories/create','CategoryController@create')->name('get.add.cate');
    Route::post('categories/create','CategoryController@store');
    Route::get('categories/edit/{id}','CategoryController@edit')->name('get.edit.cate');
    Route::post('categories/edit/{id}','CategoryController@update');
// quản lý user
    Route::get('users','UserController@index')->name('get.list.user');
    Route::get('users/create','UserController@create')->name('get.create.user');
    Route::post('users/create','UserController@store');
    Route::get('users/edit/{id}','UserController@edit')->name('get.edit.user');
    Route::post('users/edit/{id}','UserController@update');
    Route::get('users/{action}/{id}','UserController@action')->name('get.action.user');
});



