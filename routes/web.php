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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//HomePage Routes
 
Route::get('/activities','HomeController@actividades');

Route::get('/about',"HomeController@about");

//members routes
Route::resource('/membro', "MembroController");

//Admin routes
Route::get('/admin',"HomeController@admin");

Route::get('/admin/membros',"HomeController@membros");

Route::get('/admin/candmembros','HomeController@candMembros');

Route::get('/admin/actividades', 'HomeController@adminactivities');


//Route::get('/admi/membroccargo','HomeController@membroc');

//Admin Help routes

Route::get('/admin/ajuda','HomeController@pajuda');

