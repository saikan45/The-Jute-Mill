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

Route::get('/', function () {
    return view('welcome');
});

Route::view('addemployee','addemployee');
Route::post('employeex','employee@store');
Route::get('/showemployee','employee@show');

Route::get('/addunit','unit@create');
Route::post('/unit','unit@store');
Route::get('/showunit','unit@show');

Route::get('/addproject','project@create');
Route::post('/project','project@store');
Route::get('/showproject','project@show');

Route::get('/addproduct','product@create');
Route::post('/product','product@store');
Route::get('/showproduct','product@show');

Route::get('/addmaterial','material@create');
Route::post('/material','material@store');
Route::get('/showmaterial','material@show');


Route::get('/join1','join1controller@create');

Route::get('/agg','agg@create');

Route::get('/subquery','subQuery@create');

Route::get('/uni','uni@create');

Route::get('/dataDel/{name}/{gender}','PostsController@deleteData');

Route::get('/dataUp/{email}','PostsController@updateData');


