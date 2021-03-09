<?php

use App\Http\Controllers\CMS\CategoryController;
use App\Http\Controllers\CMS\ArticleController;
use App\Http\Controllers\CMS\HomeController;
use App\Http\Controllers\FrontController;
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


// Route::middleware('auth')->group(function () {
    Route::get('/', [FrontController::class, 'index'])->name('home');
    
// });



Route::middleware('auth')->prefix('dashboard')->name('cms.')->group(function() {

    Route::get('/', [HomeController::class, 'index'])->name('home');
    Route::get('/profile/{admin}', [HomeController::class, 'showProfile'])->name('profile.show');
    Route::get('/profile/{admin}/edit', [HomeController::class, 'editProfile'])->name('profile.edit');
    Route::put('/profile/{admin}', [HomeController::class, 'updateProfile'])->name('profile.update');
    Route::get('/pass', [HomeController::class, 'showPass'])->name('pass');
    Route::put('/pass', [HomeController::class, 'updatePass'])->name('pass.update');
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/article/create', [ArticleController::class, 'create'])->name('article.create');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/comments', [HomeController::class, 'comments'])->name('comments');

});


require __DIR__.'/auth.php';
