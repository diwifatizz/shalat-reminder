<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\kategoriController;
use App\Http\Controllers\ArtikelController;
use App\Http\Controllers\AsmaulController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\SlideController;
use App\Http\Controllers\IklanController;
use App\Http\Controllers\JadwalShalatController;
use App\Http\Controllers\SholatController;
use App\Http\Controllers\userController;

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

//Tampilan awal 
route::get('/', [FrontendController::class, 'index'])->name('index');

route::get('detail-artikel/{slug}', [FrontendController::class, 'detail'])->name('detail-artikel');

// Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/detail-page', [FrontendController::class, 'article'])->name('detail-page');

Route::get('/detail-page/{category}', [FrontendController::class, 'categories'])->name('detail-cat');

Route::get('/notfound', [FrontendController::class, 'notfound'])->name('notfound');

Route::get('/kategori/{slug}', [FrontendController::class, 'kategori'])->name('kategori');

Route::get('/asmaul-husna', [AsmaulController::class, 'index'])->name('asmaul-husna.index');

//route untuk menu user di admin
Route::get('/user', [userController::class, 'index'])->name('user');
Route::get('/user/create', [userController::class, 'create'])->name('user.create');
Route::post('/user', [userController::class, 'store'])->name('user.store');
Route::delete('/user/{id}', [userController::class, 'destroy'])->name('user.destroy');
//end route

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
    // Rute-rute yang memerlukan otentikasi
    // ...
    // start route untuk di resoursce admin
    Route::get('/dashboard', [dashboardController::class, 'index'])->name('dashboard');
    Route::resource('kategori', kategoriController::class);
    Route::resource('artikel', ArtikelController::class);
    Route::resource('slide', SlideController::class);
    Route::resource('iklan', IklanController::class);
    // end route

    //start route calender jadwal shalat di backend
    Route::get('Jadwal', [SholatController::class, 'index'])->name('Jadwal.index');
    Route::post('/getKabupatenSholat', [SholatController::class, 'getKabupaten'])->name('getKabupatenSholat');
    //end route calender jadwal shalat
});

//start route calender jadwal shalat di frontend
Route::get('/jadwalshalat', [JadwalShalatController::class, 'index'])->name('jadwalshalat.index');
Route::post('/getKabupatenJadwalShalat', [JadwalShalatController::class, 'getKabupaten'])->name('getKabupatenJadwalShalat');
//end route calender jadwal shalat



//route untuk file manage di dalam views-back-artikel-(create dan edit)
Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});
