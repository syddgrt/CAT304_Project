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

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/register', function() {
    return view('register');
});

Route::get('/login', function() {
    return view('login');
});

Route::get('/main', function() {
    return view('main');
});

Route::get('/forgotPass', function() {
    return view('forgotPass');
});


Route::get('/member', [MemberController::class, 'index']);

Route::get('/member/login', [MemberController::class, 'login']);

Route::get('/member/register', [MemberController::class, 'register']);

Route::get('/member/profile', [MemberController::class, 'profile']);