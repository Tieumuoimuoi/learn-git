<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\NhanvienController;
use App\Http\Controllers\AuthController;


// Route::get('/nhanvien', [NhanvienController::class, 'index']);

Route::get('/nhanvien', [NhanvienController::class, 'index'])->name('nhanvien.index');

Route::get('/nhanvien/create', [NhanvienController::class, 'create'])->name('nhanvien.create');
Route::post('/nhanvien', [NhanvienController::class, 'store'])->name('nhanvien.store');

Route::get('/nhanvien/{id}/edit', [NhanvienController::class, 'edit'])->name('nhanvien.edit');

Route::put('/nhanvien/{id}', [NhanvienController::class, 'update'])->name('nhanvien.update');

Route::delete('/nhanvien/{id}', [NhanvienController::class, 'destroy'])->name('nhanvien.destroy');

Route::get('/nhanvien/search', [NhanvienController::class, 'search'])->name('nhanvien.search');

Route::get('/nhanvien/refresh', [NhanvienController::class, 'refresh'])->name('nhanvien.refresh');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.submit');

Route::get('setLocale/{locale}', function ($locale) {
    if (in_array($locale, Config::get('app.locales'))) {
      Session::put('locale', $locale);
    }
    return redirect()->back();
})->name('app.setLocale');


