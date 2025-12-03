<?php

declare(strict_types=1);

use App\Http\Controllers\Auth\SignUpController;
use Illuminate\Support\Facades\Route;

Route::post('', SignUpController::class);
