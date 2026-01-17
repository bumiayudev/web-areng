<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    return view('welcome', ['products' => DB::table('products')->orderBy('created_at', 'asc')->limit(6)->get(),
    'seo' => [
            'title' => 'Arang Tempurung Kelapa Premium | Export Quality',
            'description' => 'Produsen arang tempurung kelapa Indonesia kualitas ekspor',
            'keywords' => 'arang kelapa, charcoal export, coconut charcoal',
            'image' => asset('images/briket.jpeg')
        ]]);
})->name('home');
Route::get('/blog', [BlogController::class, 'index'])->name('blog');
Route::get('/blog/{slug}', [BlogController::class, 'detail'])->name('blog.detail');
Route::get('/load_more', [BlogController::class, 'load_more'])->name('blog.load_more');
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/login', [UserController::class, 'login_submit'])->name('login.submit');
Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard', ['counts' => [
            'users' => DB::table('users')->count(),
            'products' => DB::table('products')->count(),
        ]]);
    })->name('dashboard');
    Route::get('/logout', [UserController::class, 'logout'])->name('logout');
    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('/users', [UserController::class, 'store'])->name('users.store');
    Route::get('/users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::put('/users/{id}', [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/{id}', [UserController::class, 'destroy'])->name('users.destroy');
    // product routes
    Route::get('/products', [ProductController::class, 'index'])->name('product.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('product.create');
    Route::post('/products', [ProductController::class, 'store'])->name('product.store');
    Route::get('/products/{id}/edit', [ProductController::class, 'edit'])->name('product.edit');
    Route::put('/products/{id}', [ProductController::class, 'update'])->name('product.update');
    Route::delete('/products/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
    Route::get('/blogs', [BlogController::class, 'list'])->name('blog.index');
    Route::get('/blogs/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blogs/create', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blogs/{id}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blogs/{id}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blogs/{id}/delete', [BlogController::class, 'destroy'])->name('blog.destroy');
    Route::get('/blogs/data', [BlogController::class, 'data'])->name('blog.data');
});
