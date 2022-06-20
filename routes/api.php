<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Menampilkan Data
Route::get('/dosen/all', 'App\Http\Controllers\\DosenAPIController@all');
Route::get('/dosen/sebagian', 'App\Http\Controllers\\DosenAPIController@sebagian');

// Menambahkan Data
Route::post('/dosen/create', 'App\Http\Controllers\\DosenAPIController@create');

// Mengubah Data
Route::post('/dosen/update', 'App\Http\Controllers\\DosenAPIController@update');

// Menghapus Data
Route::delete('/dosen/delete/{id}', 'App\Http\Controllers\\DosenAPIController@delete');
