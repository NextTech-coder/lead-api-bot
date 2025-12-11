<?php

declare(strict_types=1);

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\SignUpRequest;
use App\Models\User;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Response;

final class SignUpController extends Controller
{
    public function __invoke(SignUpRequest $request): Response
    {
        User::query()->create($request->validated());

        return response()->noContent(JsonResponse::HTTP_CREATED);
    }
}
