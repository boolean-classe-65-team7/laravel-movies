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
//     return view('index');
// })->name("home");




Auth::routes();

Route::middleware("auth")
->namespace("Admin") //namespace =  indica la cartella dove si trovano i controller
->name("admin.") //name =  Aggiunge prima del nome di ogni rotta questo prefisso
->prefix("admin") //prefix =  Aggiunge prima di ogni URI questo prefisso
->group(function () {
    Route::get('/', 'HomeController@index')->name('index');    
    Route::resource("movies" , "MovieController");
    
  });



Route::get('/', 'HomeController@index')->name('home');
