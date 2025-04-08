<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
Route::get('/', function () {
    return redirect('/posts');
});
Route::get('/', [PostController::class, 'index'])->name('posts.index');
Route::get('/create', [PostController::class, 'create'])->name('posts.create');
Route::post('/create', [PostController::class, 'store'])->name('storeNewPost');
Route::get('/posts/{id}', [PostController::class, 'show'])->name('posts.show');
Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
Route::post('/posts', [PostController::class, 'store'])->name('storeNewPost');
Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');