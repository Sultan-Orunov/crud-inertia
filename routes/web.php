<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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
    return inertia('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/posts', \App\Http\Controllers\Post\IndexController::class)->name('post.index');
Route::get('/posts/create', \App\Http\Controllers\Post\CreateController::class)->name('post.create');
Route::post('/posts', \App\Http\Controllers\Post\StoreController::class)->name('post.store');
Route::get('/posts/{post}', \App\Http\Controllers\Post\ShowController::class)->name('post.show');
Route::get('/posts/{post}/edit', \App\Http\Controllers\Post\EditController::class)->name('post.edit');
Route::patch('/posts/{post}', \App\Http\Controllers\Post\UpdateController::class)->name('post.update');
Route::delete('/posts/{post}', \App\Http\Controllers\Post\DestroyController::class)->name('post.destroy');

Route::get('/dashboard', function () {
    return inertia('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
