<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    return 'About page comes here';
})->name('about');

Route::get('/user/{user_id?}', function ($user_id = null) {
    return $user_id ? $user_id : 'Not assigned';
})->name('user');

Route::group([
    'prefix'=> 'blog', 'as'=> 'blog.'], function () {
        Route::get('/create', function () {
            return 'create comes here';
        })->name('create');
        Route::get('/edit', function () {
            return 'edit comes here';
        })->name('edit');
        Route::get('/show', function () {
            return 'show comes here';
        })->name('show');
    });
