<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Cache;
use App\Item;
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

    $topitems = Item::orderBy('popularity', 'desc')->take(3)->get();
    $recentitem = Cache::get('recent');

    if($recentitem){
        return view('home', compact('topitems'),['recent'=>$recentitem]); 
    }else{
        return view('home', compact('topitems')); 
    }
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/items', 'ItemController@index')->name('item.index');
Route::get('/items/{item}', 'ItemController@show')->name('item.show');

Route::post('/cart', 'CartController@store')->name('cart.store');
Route::get('/cart', 'CartController@index')->name('cart.index');
Route::delete('/cart/{id}', 'CartController@destroy')->name('cart.destroy');
