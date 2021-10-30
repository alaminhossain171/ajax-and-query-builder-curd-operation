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

Route::get('/','DbOperation@showDB');
Route::get('/insert', function(){
    return view('InsertPage');
});
Route::get('/delete', function(){
    return view('DeletePage');
});
Route::get('/update', function(){
    return view('UpdatePage');
});
Route::post('/insertData','DbOperation@insertData');
Route::Post('/deleteData','DbOperation@deleteData');
Route::Post('/updateData','DbOperation@updateData');
