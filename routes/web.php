<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\UserController;

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
})->name('home');

Route::get('/master', function () {
    return view('layouts.master');
});

Route::group(['prefix' => '/user'], function () {
    Route::get('/index', [userController::class, 'getIndex'])
        ->middleware('auth')
        ->name('user.index');

    Route::get('/signup', [UserController::class, 'getSignup'])
        ->name('user.signup');

    Route::post('/signup', [UserController::class, 'postSignup'])
        ->name('user.signup');

    Route::get('/signin', [UserController::class, 'getSignin'])
        ->name('user.signin');

    Route::post('/signin', [UserController::class, 'postSignin'])
        ->name('user.signin');

    Route::get('/signout', [UserController::class, 'getSignout'])
        ->name('user.signout');
});