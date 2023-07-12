<?php

use App\Http\Controllers\Admin\AdminArticleController;
use App\Http\Controllers\ArticleController;
use App\Models\Article;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//here make the controller in the basic route / because we use the same controller here
Route::middleware('auth')->group(function(){
    Route::get('/articles',[ArticleController::class,'index'])->name('home');
    Route::get('/articles/{article}',[ArticleController::class,'show'])->name('show');
});





//admin
Route::middleware('admin')->prefix('admin')->group(function(){
    Route::resource('articles',AdminArticleController::class)->names([
        'index' => 'articles'
    ]);
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();