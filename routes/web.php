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

Route::get('/', 'HomeController@index')->name('home');

Route::livewire('users/table', 'users.table')->layout('layouts.app', ['title' => 'Users Data'])->name('users');

Route::livewire('products', 'products.index')->layout('layouts.app', ['title' => 'Products'])->name('products');

Route::livewire('products/carts', 'carts.index')->layout('layouts.app', ['title' => 'Your carts'])->name('carts');
