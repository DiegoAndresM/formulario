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



Route::get('/', function(){
    return view('login');
});

Route::post('/login', 'Pintores@login');

Route::get('/index','Pintores@index', [
    'uses'=>'Pintores@index',
    'as' => 'principal'
]);

Route::get('/vincent','Pintores@vincent', [
    'uses'=>'Pintores@vincent',
    'as' => 'vangogh'
]);

Route::get('/leonardo','Pintores@leonardo', [
    'uses'=>'Pintores@leonardo',
    'as' => 'davinci'
]);

Route::get('/picasso','Pintores@picasso', [
    'uses'=>'Pintores@picasso',
    'as' => 'pablo'
]);

Route::get('/monet','Pintores@monet', [
    'uses'=>'Pintores@monet',
    'as' => 'claude'
]);