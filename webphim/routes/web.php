<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EpisodeController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/





Auth::routes();

Route::get('/', [IndexController::class, 'home'] )->name('homepage');
Route::get('/danh-muc/{title_slug}', [IndexController::class, 'category'] )->name('categoryxp');
Route::get('/the-loai/{title_slug}', [IndexController::class, 'genre'] )->name('genrexp');
Route::get('/quoc-gia/{title_slug}', [IndexController::class, 'country'] )->name('countryxp');
Route::get('/phim/{title_slug}', [IndexController::class, 'movie'] )->name('moviexp');
Route::get('/xem-phim', [IndexController::class, 'watch'] )->name('watchxp');
Route::get('/episode', [IndexController::class, 'episode'] )->name('episodexp');

Route::get('/admin', [AdminController::class, 'getHome'] )->name('admin');



// Quản lý Category
Route::get('/category', [CategoryController::class, 'getDanhSach'])->name('category');
Route::get('/category/them', [CategoryController::class, 'getThem'])->name('category.them');
Route::post('/category/them', [CategoryController::class, 'postThem'])->name('category.them');
Route::get('/category/sua/{id}', [CategoryController::class, 'getSua'])->name('category.sua');
Route::post('/category/sua/{id}', [CategoryController::class, 'postSua'])->name('category.sua');
Route::get('/category/xoa/{id}', [CategoryController::class, 'getXoa'])->name('category.xoa');

// Quản lý Country
Route::get('/country', [CountryController::class, 'getDanhSach'])->name('country');
Route::get('/country/them', [CountryController::class, 'getThem'])->name('country.them');
Route::post('/country/them', [CountryController::class, 'postThem'])->name('country.them');
Route::get('/country/sua/{id}', [CountryController::class, 'getSua'])->name('country.sua');
Route::post('/country/sua/{id}', [CountryController::class, 'postSua'])->name('country.sua');
Route::get('/country/xoa/{id}', [CountryController::class, 'getXoa'])->name('country.xoa');

// Quản lý Genre
Route::get('/genre', [GenreController::class, 'getDanhSach'])->name('genre');
Route::get('/genre/them', [GenreController::class, 'getThem'])->name('genre.them');
Route::post('/genre/them', [GenreController::class, 'postThem'])->name('genre.them');
Route::get('/genre/sua/{id}', [GenreController::class, 'getSua'])->name('genre.sua');
Route::post('/genre/sua/{id}', [GenreController::class, 'postSua'])->name('genre.sua');
Route::get('/genre/xoa/{id}', [GenreController::class, 'getXoa'])->name('genre.xoa');

// Quản lý Movie
Route::get('/movie', [MovieController::class, 'getDanhSach'])->name('movie');
Route::get('/movie/them', [MovieController::class, 'getThem'])->name('movie.them');
Route::post('/movie/them', [MovieController::class, 'postThem'])->name('movie.them');
Route::get('/movie/sua/{id}', [MovieController::class, 'getSua'])->name('movie.sua');
Route::post('/movie/sua/{id}', [MovieController::class, 'postSua'])->name('movie.sua');
Route::get('/movie/xoa/{id}', [MovieController::class, 'getXoa'])->name('movie.xoa');

// Quản lý Episode
Route::get('/episode', [EpisodeController::class, 'getDanhSach'])->name('episode');
Route::get('/episode/them', [EpisodeController::class, 'getThem'])->name('episode.them');
Route::post('/episode/them', [EpisodeController::class, 'postThem'])->name('episode.them');
Route::get('/episode/sua/{id}', [EpisodeController::class, 'getSua'])->name('episode.sua');
Route::post('/episode/sua/{id}', [EpisodeController::class, 'postSua'])->name('episode.sua');
Route::get('/episode/xoa/{id}', [EpisodeController::class, 'getXoa'])->name('episode.xoa');

Route::prefix('/admin')->middleware('admin')->name('admin.')->group(function() {
    
});