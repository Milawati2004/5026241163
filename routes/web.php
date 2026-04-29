<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang</h1> di tutorial laravel <u>www.malasngoding.com</u>";
});

Route::get('blog', function () {
	return view('blog');
});

Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);

//Pertemuan7
Route::get('menu', function () {
    return view('menu');
});

//Milawati2004.github.io
Route::get('ind', function () {
    return view('index');
});

Route::get('linktree', function () {
    return view('linktree');
});

Route::get('pert5', function () {
	return view('pertemuan5');
});

//FE5026241163
Route::get('/intro', function () {
    return view('intro');
});

Route::get('/contoh', function () {
    return view('contoh');
});

Route::get('news', function () {
    return view('news');
});

Route::get('news1', function () {
    return view('news1');
});

Route::get('pertemuan4', function () {
    return view('pertemuan4');
});

Route::get('responsive', function () {
    return view('responsive');
});

Route::get('template', function () {
    return view('template');
});
