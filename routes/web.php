<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CVProfileController;

/*
|--------------------------------------------------------------------------
| Rekonstruksi Web Routes
|--------------------------------------------------------------------------
| Rute direkonstruksi ulang oleh sistem Agen AI AI setelah insiden hilangnya
| file web.php. Routing di bawah sudah mengacu langsung ke Controller spesifik
| berdasarkan jejak file blade dan fungsi Controller yang tersisa.
*/

// Rute Home: Digunakan untuk memuat beranda CV yang mengambil method `index`.
Route::get('/', [CVProfileController::class, 'index'])->name('home');

// Rute Portofolio Detail: Rute dinamis untuk halaman sub-proyek dengan `slug`.
Route::get('/portofolio/{slug}', [CVProfileController::class, 'showPortofolio'])->name('portofolio.show');

// Rute Edit Profil (Menampilkan Form)
Route::get('/profile/edit', [CVProfileController::class, 'edit'])->name('profile.edit');

// Rute Update Profil (Memproses Data POST)
Route::post('/profile/update', [CVProfileController::class, 'store'])->name('profile.update');
