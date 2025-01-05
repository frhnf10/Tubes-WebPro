<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
use App\Http\Controllers\AdminController;

Route::get('/books/create', [BookController::class, 'create'])->name('books.create');
Route::post('/books', [BookController::class, 'store'])->name('books.store');
Route::get('/books', [BookController::class, 'index'])->name('books.index');
Route::get('/adminDashboard', [AdminController::class, 'index'])->name('admin.dashboard');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/addlibrary', function () {
    return view('addlibrary');
});


Route::get('/adminpage-userlist', function () {
    return view('adminpage-userlist');
});

Route::get('/adminpage', function () {
    return view('adminpage');
});

Route::get('/admin-bookrequest', function () {
    return view('admin-bookrequest');
});

Route::get('/dashboard-preview', function () {
    return view('dashboard-preview');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/login2', function () {
    return view('login2');
});

Route::get('/mylibrary', function () {
    return view('mylibrary');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/signup', function () {
    return view('signup');
});


