<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\MyviController;
use App\Http\Controllers\ReportController;

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

Route::get('/googleMaps', [GoogleController::class, 'index']);

Route::get('/myvi', [MyviController::class, 'index']);

Route::view('main', 'main')
	->name('main')
	->middleware(['auth', 'verified']);

Route::get('/', function () {
    return view('welcome');
});
    
Route::get('/user', [ReportController::class, 'index'])->name('index');

Route::get('/create', [ReportController::class, 'create'])->name('create');

Route::post('store/', [ReportController::class,'store'])->name('store');

Route::get('show/{report}', [ReportController::class, 'show'])->name('show');

Route::get('edit/{report}', [ReportController::class, 'edit'])->name('edit');

Route::put('edit/{report}', [ReportController::class, 'update'])->name('update');

Route::delete('/{report}', [ReportController::class, 'destroy'])->name('destroy');