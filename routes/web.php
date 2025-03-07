<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/', [ArticleController::class, 'index'])->name('index');

Route::group(['prefix' => 'article'], function () {
    Route::view('/new', 'create_article')->name('article.create.view');
    Route::get('/{article}', [ArticleController::class, 'show'])->name('article.show');

    Route::post('/new', [ArticleController::class, 'create'])->name('article.create');
});
