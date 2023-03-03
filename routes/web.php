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


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ProductController::class, 'about']); //слайдер о нас
Route::get('/catalog', [App\Http\Controllers\ProductController::class, 'catalog']); //страница каталога
Route::get('/catalog/sort/{name}/{vis}', [App\Http\Controllers\ProductController::class, 'catalog']); //сортировка
Route::get('/catalog/filter/{id}', [ProductController::class, 'filtr']);
Route::get('/where', function () { // где нас найти
    return view('where');
});
