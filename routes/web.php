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
    return view('Homepage');
})->name ('Homepage');


Route::get('/ListaFumetti', function () {
    $Comics = config('Comics');
    return view('ListaFumetti',['Comics'=> $Comics]);
})->name ('ListaFumetti');

Route::get('/About',function (){
    return view ('About');
})->name('About');