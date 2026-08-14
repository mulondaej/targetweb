<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TargetController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

Route::middleware('guest')->controller(AuthController::class)->group(function () {
    Route::get('/register', 'showRegister')->name('show.register');
    Route::get('/login', 'showLogin')->name('show.login');
    Route::post('/register', 'register')->name('register');
    Route::post('/login', 'login')->name('login');
});

Route::middleware('auth')->controller(TargetController::class)->group(function () {
    Route:: get('/targets', 'index')->name('targets.index');

    Route::get('/targets/create', 'create')->name('targets.create');

    Route::get('/targets/{target}', 'show')->name('targets.show');

    Route::post('/targets/', 'store')->name('targets.store');

    Route::delete('/targets/{target}', 'destroy')->name('targets.destroy');

});
