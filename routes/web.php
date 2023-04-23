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
// Route::get('/test', function () {
//     return view('dashboard');
// });
// Route::get('/properties', function () {
//     return view('properties');
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
]);

Route::controller(AppartementController::class)->middleware((['auth']))->group(function(){
    Route::post('/appartementt','store')->name('appartement.store');
    Route::get('/dashboardd','index')->name('dashboard')->middleware(['permission:view my appartement|view all appartement']);
    Route::get('properties/{id}','edit')->name('properties.edit')->middleware(['permission:view my appartement|view all appartement']);
    Route::put('/propertiess/{id}','update')->name('properties.update');
    Route::delete('/propertie','destroy')->name('properties.destroy');
});
Route::controller(CharacteristicController::class)->middleware((['auth']))->group(function(){
    Route::get('characteristics','index')->name('characteristic.index');
    Route::post('characteristic','store')->name('characteristic.store');
    Route::delete('/delete/characteristic','destroy')->name('characteristic.destroy');
});

 Route::controller(ReservationController::class)->middleware((['auth']))->group(function(){
    Route::get('/reservation','index')->name('reservation.index')->middleware(['permission:view my reservation|view all reservation']);
    Route::post('/reserve/{id}','store')->name('reservation.store');
    Route::get('/check/{id}','show')->name('checkreservation');
    Route::get('/validate/{id}','validation_reservation')->name('validation_reservation');
});

Route::controller(CharacteristicController::class)->middleware((['auth']))->group(function(){
    Route::post('/characteristicss','store')->name('characteristic.store');
    Route::get('/characteristics','index')->name('characteristic.index');
});
Route::controller(HomeController::class)->group(function(){
    Route::get('/allproperties','index')->name('allproperties.index');
    Route::get('/','indexlanding')->name('home');
    Route::get('/propertiesssss/{id}','show')->name('propertie.show');
    Route::post('/filter','filterAppartement')->name('filterAppartement');
});



