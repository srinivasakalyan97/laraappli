<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SingleController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     $title = 'About, World!';
//     return view('welcome', ['title'=> $title]);
// });

Route::resource("/blog", BlogController::class);
Route::get('/', [HomeController::class, 'index']);

Route::get('/single', SingleController::class);

// Route::get('/blog/create', [BlogController::class, 'create']);

Route::get('/about', function () {
    return 'About page comes here';
})->name('about');

Route::get('/user/{user_id?}', function ($user_id = null) {
    return $user_id ? $user_id : 'Not assigned';
})->name('user');

// Route::group([
//     'prefix'=> 'blog', 'as'=> 'blog.'], function () {
//         Route::get('/create', function () {
//             return 'create comes here';
//         })->name('create');
//         Route::get('/edit', function () {
//             return 'edit comes here';
//         })->name('edit');
//         Route::get('/show', function () {
//             return 'show comes here';
//         })->name('show');
//     });

    Route::get('/contact', function () {
        return view('contact');
    });

    Route::get('/about', function () {
        return view('about');
    });
