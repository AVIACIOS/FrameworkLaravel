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
Route::get('/my-name', function () {
    return ('Загретдинов Артём Русланович');
});
Route::get('/my-friend', function (  $friend) {


    return ("у пролетариата нет фамилии" );
});
Route::get('/my-friend/{friend}', function (  $friend) {
    return ("у пролетариата нет фамилии $friend" );
});

Route::get('/my-city/{city}', function ($city) {
    return ("Город - $city" );
})->where('name', '[A-Za-z]+');

Route::get('/my-level/{lvl}', function ($lvl) {
    if($lvl< 25 )return ("Уровень - новичок" );
    if($lvl< 50 )return ("Уровень1 - специалист" );
    if($lvl< 75 )return ("Уровень2 - босс" );
    if($lvl< 99 )return ("Уровень3 - старик" );
     else return ("Уровень3 - король" );


})->where('lvl', '[0-9]+');

# Route::redirect('/test','/');
