<?php

declare(strict_types=1);

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Public;

Route::get('/', Public\HomeController::class)->name('public.home');
