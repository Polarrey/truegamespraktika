<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BasketShop;
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

// Страницы сайта

Route::get('/findus', function () { //  Страница " Где нас найти?"
    return view('findus');
});
Route::get('/', [ProductController::class, 'aboutus']); // Страница "О нас" и слайдер



// Каталог

Route::get('/catalog', [ProductController::class, 'catalog']); // Страница "Каталог"
Route::get('/catalog/tovar/{id}', [ProductController::class, 'oneproduct']); // Посмотреть подробнее о конкретном товаре
Route::get('/catalog/sort/{name}/{xyz}', [ProductController::class, 'catalog']); // Сортировка по наименованию, году и цене.
Route::get('/catalog/filter/{id}', [ProductController::class, 'filterproduct']); // Фильтр товара по категориям магазина



// Админ-панель
Route::get('/admin', [Admin::class, 'admin'])->name('admin')->middleware('admin'); //страница Админа
Route::get('/admin/product', [Admin::class, 'form'])->middleware('admin'); // Страница создания товаров
Route::post('/admin/product/create', [Admin::class, 'maketovar'])->name('makeprod'); // Отправка данных товара в базу данных
Route::get('/admin/product/delete/{id}', [Admin::class, 'proddel'])->middleware('admin'); //Удаление продукта из базы данных
Route::get('/admin/category', function () {
    return view('makecategory');
})->middleware('admin'); // Страница создания категории
Route::post('/admin/category/create', [Admin::class, 'makecategory'])->name('makecategory'); // Отправка категории в базу данных
Route::get('/admin/category/delete/{id}', [Admin::class, 'categoriesdel'])->middleware('admin'); // Удаление категории из базы данных

//Корзина

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cart', [BasketShop::class, 'index'])->name('cart.index');
    Route::get('/cart/addproductbasket/{product_id}', [BasketShop::class, 'addproductbasket'])->name('cartmake');
    Route::get('/cart/delete/{cart_id}', [BasketShop::class, 'delete'])->name('cartdelete');
});









Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');