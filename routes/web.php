<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('html101');
// });

Route::get('/se', function() {
    return view('template.default');
});

Route::get('/calculate',[App\Http\Controllers\MyController::class,'inFo']);
Route::post('/calculate',[App\Http\Controllers\MyController::class,'calculate']);


Route::get('/', [App\Http\Controllers\MyController::class, 'index']);
Route::post('/', [App\Http\Controllers\MyController::class, 'store']);

Route::resource('/flights', App\Http\Controllers\FlightController::class);
Route::resource('/pokedexs', App\Http\Controllers\PokedexController::class);
