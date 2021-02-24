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
    Route::get('/articles', [ArticleController::class, 'index'])->name('articles');
    Route::get('/categories', [CategoryController::class, 'index'])->name('categories');
    Route::get('/comments', [HomeController::class, 'comments'])->name('comments');

});


require __DIR__.'/auth.php';
