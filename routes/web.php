<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\PegawaiDBController;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\BusDBController;
use App\Http\Controllers\NilaiKuliahController;

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

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);
Route::get('/formulir', [PegawaiController::class, 'formulir']);
Route::post('/formulir/proses', [PegawaiController::class, 'proses']);
//blog
Route::get('/blog', [BlogController::class, 'home']);
Route::get('/blog/tentang', [BlogController::class, 'tentang']);
Route::get('/blog/kontak', [BlogController::class, 'kontak']);
//route CRUD
Route::get('/pegawai', [PegawaiDBController::class, 'index2']);
Route::get('/pegawai/tambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawai/store', [PegawaiDBController::class, 'store']);
Route::get('/pegawai/edit/{id}', [PegawaiDBController::class, 'edit']);
Route::get('/pegawai/update', [PegawaiDBController::class, 'update']);
Route::post('/pegawai/hapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawai/cari', [PegawaiDBController::class, 'cari']);
//route CRUD siswa
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');
//route BUS
Route::get('/bus', [BusDBController::class, 'indexbus']);
Route::get('/bus/tambah', [BusDBController::class, 'tambah']);
Route::post('/bus/store', [BusDBController::class, 'store']);
Route::get('/bus/edit/{kode}', [BusDBController::class, 'edit']);
Route::post('/bus/update', [BusDBController::class, 'update']);
Route::get('/bus/hapus/{kode}', [BusDBController::class, 'hapus']);
Route::post('/bus/cari', [BusDBController::class, 'cari']);
//route Nilai Kuliah
Route::get('/nilaikuliah', [NilaiKuliahController::class, 'indexnilaikuliah']);
Route::get('/nilaikuliah/tambah', [NilaiKuliahController::class, 'tambah']);
Route::post('/nilaikuliah/store', [NilaiKuliahController::class, 'store']);
