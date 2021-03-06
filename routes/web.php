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

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/prodotti', 'ProductController@index')->name('prodotti');

Route::get('/contatti', function() {
    return view('contatti');
})->name('contatti');

Route::get('admin/products', function() {
    return view('admin.prodotti');
})->name('admin.prodotti');

Route::get('/prodotti/{id}', function($id) {
    return view('prodotto', compact('id'));
})->name('prodotti.show');
