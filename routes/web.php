<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appartement\AppartementController;
use App\Http\Controllers\ElementAppartement\PersonController;
use App\Http\Controllers\ElementAppartement\CharacteristicController ;

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
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/landing', function () {
        return view('landing');
    })->name('landing');
});


Route::get('/dashboard', function () {
    return view('mydashboard');
})->name('dashboard');

Route::get('/', function () {
    return view('landing');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/All.properties', function () {
    return view('All_Properties');
});
Route::get('/a_propos', function () {
    return view('a_propos');
});
Route::get('/dash', function () {
    return view('mydashboard');
});
Route::get('/properties', function () {
    return view('properties');
});


Route::controller(AppartementController::class)->group(function(){
    Route::post('/appartement','store')->name('appartement.store');
    Route::get('/','index')->name('index');
});


