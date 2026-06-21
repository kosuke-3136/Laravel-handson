<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Exercise1Controller;
use App\Http\Controllers\Exercise2Controller;
use App\Http\Controllers\Exercise3Controller;
use App\Http\Controllers\Exercise4Controller;
use App\Http\Controllers\Exercise5Controller;
use App\Http\Controllers\Exercise6Controller;
use App\Http\Controllers\Exercise7Controller;
use App\Http\Controllers\Exercise8Controller;
use App\Http\Controllers\Exercise9Controller;
use App\Http\Controllers\Exercise10Controller;
use App\Http\Controllers\Exercise11Controller;

Route::get('/', fn() => view('welcome'));

// 必須
Route::get('/exercise1',         [Exercise1Controller::class, 'create'])->name('exercise1.create');
Route::post('/exercise1',        [Exercise1Controller::class, 'store'])->name('exercise1.store');
Route::get('/exercise1/success', [Exercise1Controller::class, 'success'])->name('exercise1.success');

Route::get('/exercise2/{id}', [Exercise2Controller::class, 'show'])->name('exercise2.show');

Route::get('/exercise3', [Exercise3Controller::class, 'index'])->name('exercise3.index');

// 時間があれば
Route::get('/exercise4', [Exercise4Controller::class, 'index'])->name('exercise4.index');
Route::get('/exercise5', [Exercise5Controller::class, 'index'])->name('exercise5.index');

// 自習用
Route::get('/exercise6',         [Exercise6Controller::class, 'create'])->name('exercise6.create');
Route::post('/exercise6',        [Exercise6Controller::class, 'store'])->name('exercise6.store');
Route::get('/exercise6/success', [Exercise6Controller::class, 'success'])->name('exercise6.success');

Route::get('/exercise7', [Exercise7Controller::class, 'index'])->name('exercise7.index');

Route::get('/exercise8',         [Exercise8Controller::class, 'create'])->name('exercise8.create');
Route::post('/exercise8',        [Exercise8Controller::class, 'store'])->name('exercise8.store');
Route::get('/exercise8/success', [Exercise8Controller::class, 'success'])->name('exercise8.success');

Route::get('/exercise9',                [Exercise9Controller::class, 'index'])->name('exercise9.index');
Route::post('/exercise9/{postId}/like', [Exercise9Controller::class, 'like'])->name('exercise9.like');

Route::get('/exercise10', [Exercise10Controller::class, 'index'])->name('exercise10.index');

Route::get('/exercise11', [Exercise11Controller::class, 'index'])->name('exercise11.index');
