<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;

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
    return view('layouts.index');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/list', [BlogController::class, 'listBlogs'])->name('listBlogs');
Route::get('/create', [BlogController::class, 'createBlog'])->name('createBlog');
Route::post('/create', [BlogController::class, 'processCreateBlog'])->name('processCreateBlog');
Route::get('/edit/{id}', [BlogController::class, 'editBlog'])->name('editBlog');
Route::post('/edit/{id}', [BlogController::class, 'processEditBlog'])->name('processEditBlog');
Route::get('/delete/{id}', [BlogController::class, 'deleteBlog'])->name('deleteBlog');
Route::get('/view/{id}', [BlogController::class, 'viewBlog'])->name('viewBlog');
