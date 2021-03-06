<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EnglishController;

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

Route::get('/', 'EnglishController@index');
Route::prefix('english')->group(function () {
    Route::get('_{chr}', 'EnglishController@index')->where('chr', '[A-Z]+')->name('index');
//    Route::get('{id}', 'EnglishController@show');
});

Route::prefix('russian')->group(function () {
    Route::get('{chr}', 'RussianController@index')->name('ru.index');
});

//Route::get('english/{id}/edit', 'EnglishController@edit');
//Route::get('english/{id}', 'EnglishController@show');
Route::post('english', 'EnglishController@store');
Route::resource('english', 'EnglishController');
//Route::resource('russian', 'RussianController');


Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('config:cache');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
//    Artisan::call('backup:clean');
    return "Кэш очищен.";
});

//Route::get('/', function () {
//    return view('content.words.indexWord');
//});
//Route::get('/', function () {
//    return view('welcome');
//});
