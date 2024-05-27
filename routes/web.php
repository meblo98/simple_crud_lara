<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticlesController;

// Route::get('/', function () {
//     return redirect()->route('articles.index');
// });



Route::resource("articles", ArticlesController::class);
