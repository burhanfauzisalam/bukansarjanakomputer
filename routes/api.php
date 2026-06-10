<?php

use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Route;

Route::middleware('api.secret')->post('/articles', [ArticleController::class, 'store']);
