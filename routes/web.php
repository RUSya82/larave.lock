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
$a = 1;
$b=$a++ + ++$a;
$c=$a - $b;

Route::get('/', function () {
    return view('welcome');
});
