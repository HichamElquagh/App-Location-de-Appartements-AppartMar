<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Appartement\AppartementController;
use App\Http\Controllers\Appartement\HomeController;
use App\Http\Controllers\ElementAppartement\PersonController;
use App\Http\Controllers\ElementAppartement\CharacteristicController ;
use App\Http\Controllers\ElementAppartement\ReservationController;

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
//     return view('landing');
// });
// Route::get('/dashboard', function () {
//     return view('mydashboard');
// })->name('dashboard');

Route::get('/contact', function () {
    return view('contact');
});
// Route::get('/All.properties', function () {
//     return view('All_Properties');
// });
Route::get('/a_propos', function () {
    return view('a_propos');
});
Route::get('/test', function () {
    return view('dashboard');
});
Route::get('/properties', function () {
    return view('properties');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

Route::controller(AppartementController::class)->group(function(){
    Route::post('/appartement','store')->name('appartement.store');
    Route::get('/dashboard','index')->name('dashboard');
    Route::get('propertie/{id}','edit')->name('properties.edit');
    Route::put('/propertie/{id}','update')->name('properties.update');
});

Route::controller(ReservationController::class)->group(function(){
    Route::get('/reservation','index')->name('reservation.index');
});

Route::controller(CharacteristicController::class)->group(function(){
    Route::post('/characteristics','store')->name('characteristic.store');
    Route::get('/characteristics','index')->name('characteristic.index');
});
Route::controller(HomeController::class)->group(function(){
    Route::get('/allproperties','index')->name('allproperties.index');
    Route::get('/','indexlanding');
});



