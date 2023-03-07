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

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('/', [App\Http\Controllers\tovar::class, 'aboutus']);  //Страница о нас с слайдером
Route::get('/findus', function () { return view('findus');});   //Страница "Где нас найти?"
Route::get('/catalog', [App\Http\Controllers\tovar::class, 'catalog']);  //Страница Каталог
Route::get('/catalog/sort/{name}/{nap}',[App\Http\Controllers\tovar::class, 'catalog']); //Сортировка
Route::get('/catalog/filter/{id}', [App\Http\Controllers\tovar::class, 'filter']);
Route::get('/catalog/{id}', [App\Http\Controllers\tovar::class, 'category'])->name('category'); 
Route::get('/catalog/singleproduct/{id}',[App\Http\Controllers\tovar::class, 'oneproduct']); // Товар открывается отдельно



Route::get('/addtocart/{id}', [App\Http\Controllers\tovar::class,'addtocart']);
Route::get('/cart', [App\Http\Controllers\tovar::class,'cart']);
Route::get('/cartadd/{id}', [App\Http\Controllers\CartController::class,'addbtn']);
Route::get('/cartrem/{id}', [App\Http\Controllers\CartController::class,'removebtn']);
Route::get('/cartall/{id}', [App\Http\Controllers\CartController::class,'removeall']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
