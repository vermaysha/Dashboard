<?php

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

Route::redirect('/', '/dashboard');

Route::get('/logout', 'Auth\LoginController@logout')->middleware(['auth']);
Route::get('/dashboard', 'DashboardController@index')->middleware(['auth'])->name('dashboard');
Route::get('/report', 'DashboardController@report')->middleware(['auth'])->name('report');
Route::get('/table', 'DashboardController@table')->middleware(['auth'])->name('table');
Route::get('/image', 'DashboardController@image')->middleware(['auth'])->name('image');
