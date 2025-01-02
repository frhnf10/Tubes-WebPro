<?php

use Illuminate\Support\Facades\Route;

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