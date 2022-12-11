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

Route::view('/', 'home')->name('home');

/* Example  views
Route::view('dashboard2', 'dashboard')->name('dashboard2');
Route::view('table1', 'tableDash')->name('tableDash');
*/

Route::view('bcra', 'otherTabs.bcra')->name('bcra');

Route::view('mep', 'otherTabs.mep')->name('mep');
Route::view('ccl-cedear', 'otherTabs.ccl')->name('ccl-cedear');

Route::view('ggal', 'otherTabs.ggal')->name('ggal');
Route::view('come', 'otherTabs.come')->name('come');
Route::view('ypfd', 'otherTabs.ypfd')->name('ypfd');