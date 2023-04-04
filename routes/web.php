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


Route::post('/appartement', [AppartementController::class, 'store'])->name('appartement.store');


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