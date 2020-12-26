<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/', function () {
    return view('welcome');
});
Route::get('post_login', [\App\Http\Controllers\LoginController::class, 'login'])->name('login');

Route::get('/login', [\App\Http\Controllers\LoginController::class, 'getLogin'])->name('Login');

Route::get('/registration', [\App\Http\Controllers\LoginController::class, 'registration'])->name('user.registration');
Route::get('/registration/save', [\App\Http\Controllers\LoginController::class, 'registration_save'])->name('user.registration.save');



Route::middleware('auth')->group(function (){
    Route::get('/posts',[\App\Http\Controllers\Postscontroller::class, 'index'])->name('posts.show');
    Route::get('posts/create', [\App\Http\Controllers\Postscontroller::class, 'create'])->name('post.create');
    Route::get('/posts/{id}', [\App\Http\Controllers\Postscontroller::class, 'show'])->name('post.show');
    Route::post('posts/savepost', [\App\Http\Controllers\Postscontroller::class, 'save'])->name('post.save');
    Route::get('posts/{id}/edit', [\App\Http\Controllers\Postscontroller::class, 'edit'])->name('post.edit');
    Route::put('posts/{id}/update', [\App\Http\Controllers\Postscontroller::class, 'update'])->name('post.update');
    Route::delete('posts/{id}/delete', [\App\Http\Controllers\Postscontroller::class, 'delete'])->name('post.delete');
    Route::get('/logout', [\App\Http\Controllers\LoginController::class, 'logout'])->name('logout');
    Route::get('/user_page', [\App\Http\Controllers\Postscontroller::class, 'user_page'])->name('user_page');
    Route::post('/posts/{post}/approve', [\App\Http\Controllers\Postscontroller::class, 'post_approve'])->name('post_approve');

});
