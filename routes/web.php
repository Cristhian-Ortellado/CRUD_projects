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
Route::resource('projects','App\Http\Controllers\ProjectController');
Route::view('/','home')->name('home');
Route::view('/contact','contact')->name('contact');
Route::view('/about','about')->name('about');


Route::post('/contact',['App\Http\Controllers\MessageController','store'])->name('messages.store');
Auth::routes(['register' => false]);



