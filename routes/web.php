<?php

use App\Http\Controllers\ContainerController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/container', function () {
    return view('container');
});
Route::post('/store',[ContainerController::class,'store'])->name('store');

Route::get('/edit', function () {
    return view('edit');
})->name('edit');

Route::get('/dashboard', function () {
    return view('dashboard');
});