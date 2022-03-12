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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return redirect('test');
})->name('dashboard');

//Se envia despues de dar de alta el cuestionario
Route::middleware(['auth:sanctum', 'verified'])->resource('/test', 'App\Http\Controllers\TestController');


//Importación de excel
Route::post('import-list-excel', 'App\Http\Controllers\TestController@importExcel')->name('questions.info.excel');