<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\JadwalController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

route::get('/', [FrontendController::class, 'index']);

route::get('detail-artikel/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/detail-page', [FrontendController::class, 'article'])->name('detail.page');
Route::get('/kontak', [FrontendController::class, 'kontak'])->name('kontak');



Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');


Route::resource('kategori', kategoriController::class);

Route::resource('artikel', ArtikelController::class);

Route::resource('slide', SlideController::class);


Route::resource('iklan', IklanController::class);

Route::resource('jadwal', JadwalController::class);


//route untuk file manage di dalam views-back-artikel-(create dan edit)

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
