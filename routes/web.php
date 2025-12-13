<?php

declare(strict_types=1);

use Illuminate\Http\Response;
use Illuminate\Support\Facades\Route;

Route::get('/', function (): Response {
    return new Response('ok');
});
