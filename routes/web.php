<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticlesController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//Praktikum 1

// Route::get('/{nama}', function ($nama) {
// 	echo "Selamat Datang".' '.$nama;
// });

// Route::get('/about/{nim}/{nama}', function ($nim,$nama) {
// 	echo "Selamat Datang".' '.$nama.' Nim'. ':'.$nim;
// });

// Route::get('/articles/{id}', function ($id) {
// 	echo "Halaman artikel dengan id ".$id;
// });


//Praktikum 2
// Route::get('/', [PageController::class, 'index']);

// Route::get('/about', [PageController::class, 'about']);

// Route::get('/articles/{id}', [PageController::class, 'articles']);

 // Route::get('/', [HomeController::class, 'index']);

 // Route::get('/about', [AboutController::class, 'about']);

 // Route::get('/articles/{id}', [ArticlesController::class, 'articles']);


//Praktikum 3
Route::prefix('games')->group(function () {
    Route::get('/{game}',[GameController::class, 'index']);
});

Route::prefix('news')->group(function () {
    Route::get('/{param}',[NewsController::class, 'index']);
});


Route::prefix('program')->group(function () {
    Route::get('/{param}',[ProgramController::class, 'index']);
});

Route::get('/about-us',[AboutController::class, 'index']);


Route::resource('contact-us', ContactController::class);