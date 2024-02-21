<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PhotoController;

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

// Route::get('/hello', function () {
//     return 'Hello World';
// });   
Route::get('/world', function () {
    return 'World';
});

// Praktikum  1 Route
// Route::get('/', function () {
//     return 'Selamat Datang';
// });
// Route::get('/about', function() {
//     return 'NIM : 2241720185 <br> Nama : Mochammad Nizar Mahi';
// });

// Praktikum 2 Route dengan Parameter
// Route::get('/user/{name}', function ($name) {
//     return 'Nama saya '.$name;
// });
Route::get('/posts/{post}/comments/{comment}', function ($postId, $commentId) {
    return 'Pos ke-'.$postId." Komentar ke-: ".$commentId;
});
// Route::get('/articles/{id}', function ($id) {
//     return 'Halaman artikel dengan id '. $id;
// });

// Praktikum 3 Route  Optional Parameter
Route::get('/user/{name?}', function ($name='John') {
    return 'Nama saya '.$name;
});

// Praktikum 1 Controller
// Route::get('/hello', [WelcomeController::class,'hello']);
// Route::get('/index', [PageController::class,'index']);
// Route::get('/about', [PageController::class,'about']);
// Route::get('/articles/{id}', [PageController::class,'articles']);

Route::get('/hello', [WelcomeController::class,'hello']);
Route::get('/index', [HomeController::class,'index']);
Route::get('/about', [AboutController::class,'index']);
Route::get('/articles/{id}', [ArticleController::class,'index']);

// Praktikum 2 Controller Resource
// Route::resource('photos', PhotoController::class);
Route::resource('photos', PhotoController::class)->only([ 'index', 'show']);
Route::resource('photos', PhotoController::class)->except([ 'create', 'store', 'update', 'destroy']);
