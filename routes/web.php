<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;

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

Route::get('/', [ArticleController::class,'index'])->name('main_index');


Route::get('/article/{id}',[ArticleController::class,'show'])->name('show_article');

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::group(['prefix'=>'admin','middleware'=>'auth'],function () { 
        
    Route::get('/', [HomeController::class,'index'])->name('admin_index');
    Route::get('/create', [ArticleController::class,'create'])->name('article_create');
    Route::post('/store', [ArticleController::class,'store'])->name('article_create');
    Route::get('/edit/{id}', [ArticleController::class,'edit'])->name('article_edit');
    Route::put('/update/{id}', [ArticleController::class,'update'])->name('article_create');
    Route::put('/delete', [ArticleController::class,'destroy'])->name('article_create');

    // Route::get('/', 'HomeController@index')->name('admin_index');
    // Route::get('/create', 'ArticleController@create')->name('article_create');
    // Route::post('/store', 'ArticleController@store')->name('article_create');
    // Route::get('/edit/{id}', 'ArticleController@edit')->name('article_edit');
    // Route::put('/update/{id}', 'ArticleController@update')->name('article_create');
    // Route::put('/delete', 'ArticleController@destroy')->name('article_create');
});