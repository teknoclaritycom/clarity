<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Livewire\Posts;
use App\Http\Livewire\Websets;
use App\Http\Livewire\Kontens;
use App\Http\Livewire\Produks;
use App\Http\Livewire\Ui;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Penjualans;


//Route Halaman Utama
Route::get('/', Ui::class)->name('welcome');

//Route Peek Halaman
Route::get('/halaman/{slug}', [Ui::class, 'peekh'])->name('peekh');

//Route List Artikel
Route::get('/blog', [Ui::class, 'listblog'])->name('listblog');

//Route List Produk

//Route Sitemap.XML

//Route Feed Google News


Route::middleware(['auth:sanctum','verified'])->group(function () {

    //Route Dashboard
    Route::get('/dashboard', Dashboard::class)->name('dashboard');

    //Route Konten
    Route::get('/admin/konten', Kontens::class)->name('adminkonten');

    //Route Halaman
    Route::get('/admin/halaman', Posts::class)->name('adminhalaman');

    //Route Produk Jualan
    Route::get('/admin/produk', Produks::class)->name('adminproduk');

    //Route Produk Penjualan
    Route::get('/admin/penjualan', Penjualans::class)->name('adminpenjualan');

    //Route Produk Penjualan
    Route::get('/admin/webset', Websets::class)->name('adminwebset');

    //Route Plugin
    Route::post('ckeditor/upload', [CKEditorController::class, 'upload'])->name('ckeditor.image-upload');
});
