<?php

use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MatakuliahController;
use Illuminate\Routing\Router;
use App\Http\Controllers\QuestionController;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PelangganController;


Route::get('/matakuliah/show/{kode?}', [MatakuliahController::class, 'show']);

Route::resource('matakuliah', MatakuliahController::class);

Route::get('/', function () {
    return view('welcome');
});

Route::get('/pcr', function () {
    return 'Welcome to PCR';
});

Route::get('/mahasiswa', function () {
    return 'Halo Mahasiswa PCR!';
})->name('mahasiswa.show');

Route::get('/nama/{param1}', function ($param1) {
    return 'Nama saya: ' . $param1;
});

Route::get('/nim/{param1?}', function ($param1='') {
    return 'NIM saya: ' . $param1;
});

Route::get('/mahasiswa/{param1}', [App\Http\Controllers\MahasiswaController::class, 'show']);

Route::get('/about', function () {
    return view('halaman-about');
});

Route::get('/home', [HomeController::class, 'index']);

Route::post('question/store', [QuestionController::class, 'store'])
		->name('question.store');

Route::get('dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::resource('pelanggan', PelangganController::class);
