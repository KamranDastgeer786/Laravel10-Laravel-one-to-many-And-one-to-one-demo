<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\EmailController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProductDetailController;
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

// Route::get('/home', function () {
//     return view('welcome');
// });

Route::get('/home', function () {
    return view('home');
})->name('home');

Route::get('/dashboard', function () {
    return view('home');
})->name('dashboard');

Route::resource('user', UserController::class);
Route::resource('products', ProductController::class);
Route::resource('productdetails', ProductDetailController::class);
Route::resource('category', CategoryController::class);

Route::get('send-email', [EmailController::class, 'SendEmail']);




// Route::get('/buttons', function () {
//     return view('buttons');
// })->name('buttons');

// Route::get('/typography', function () {
//     return view('typography');
// })->name('typography');

// Route::get('/elements', function () {
//     return view('elements');
// })->name('elements');

// Route::get('/widgets', function () {
//     return view('widgets');
// })->name('widgets');

// Route::get('/forms', function () {
//     return view('forms');
// })->name('forms');

// Route::get('/tables', function () {
//     return view('tables');
// })->name('tables');

// Route::get('/charts', function () {
//     return view('charts');
// })->name('charts');

// Route::get('/signin', function () {
//     return view('signin');
// })->name('signin');

// Route::get('/signup', function () {
//     return view('auth.sign-up');
// })->name('signup');

// Route::get('/404', function () {
//     return view('404');
// })->name('error');

// Route::get('/blank', function () {
//     return view('blank');
// })->name('blank');
