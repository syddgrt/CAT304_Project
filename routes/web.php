<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MyviController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\FoodController;

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

Route::get('/home', function () {
    return view('home');
});

Route::get('/create', function () {
    return view('create');
});

// Route::get('/googleMaps', [GoogleController::class, 'index']);

Route::get('/myvi', [MyviController::class, 'index']);

Route::view('main', 'main')
	->name('main')
	->middleware(['auth', 'verified']);


// Route::get('/googleMaps', [MapController::class, 'show']);
Route::get('/googleMaps', [MapController::class, 'show']);

Route::get('/marker/{id}', [ FoodController::class, 'marker' ] );

Route::get('/image/{id}', [FoodController::class, 'imageForm']);

Route::post('/image/{id}', [ FoodController::class, 'store' ] );


Route::get('cmarker', [MapController::class, 'imageForm']);

Route::post('cmarker', [ MapController::class, 'store' ] );





Route::get('edit/{id}', [FoodController::class, 'edit']);
Route::put('update/{id}', [FoodController::class, 'update']);
Route::get('delete/{id}', [FoodController::class, 'destroy']);