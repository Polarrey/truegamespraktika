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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
