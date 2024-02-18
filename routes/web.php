<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Front\Homepage;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

/*
Route::get('/', function () {
    return view('front.homepage'); 
});
*/

//Route::get('/','app\Http\Controllers\Front\Homepage@index')->name('homepage');
Route::get('/', [Homepage::class, 'index']);
Route::get('/{category}/{id}','App\Http\Controllers\Front\Homepage@blogDetay')->name('blogDetay');
