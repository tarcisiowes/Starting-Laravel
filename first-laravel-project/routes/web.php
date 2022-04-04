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

Route::get('/', function () {

    $name = "tarushi";
    $age = 36;
    $job = "Developer";

    return view('welcome', ['name' => $name, 'age' => $age,'job' => $job]);
});
Route::get('/contatos', function () {
    return view('contact');
});
Route::get('/sobre', function () {
    return view('about');
});
