<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

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

Route::get('/', function () {
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/register', function () {
    return view('register');
});

Route::get('/database',[StudentController::class, 'index'])->name('student');

Route::get('/tambahdata',[StudentController::class, 'tambahdata'])->name('tambahdata');

Route::post('/insert',[StudentController::class, 'insert'])->name('insert');

Route::get('/tampilkandata/{id}',[StudentController::class, 'tampilkandata'])->name('tampilkandata');

Route::post('/updatedata/{id}',[StudentController::class, 'updatedata'])->name('updatedata');

Route::get('/delete/{id}',[StudentController::class, 'delete'])->name('delete');