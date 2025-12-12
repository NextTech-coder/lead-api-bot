<?php

declare(strict_types=1);

namespace App\MoonShine\Resources\VerificationUser;

use App\Models\User;
use App\MoonShine\Resources\VerificationUser\Pages\VerificationUserDetailPage;
use App\MoonShine\Resources\VerificationUser\Pages\VerificationUserFormPage;
use App\MoonShine\Resources\VerificationUser\Pages\VerificationUserIndexPage;

use MoonShine\Contracts\Core\PageContract;
use MoonShine\Laravel\Resources\ModelResource;

/**
 * @extends ModelResource<\App\Models\User, VerificationUserIndexPage, VerificationUserFormPage, VerificationUserDetailPage>
 */
class VerificationUserResource extends ModelResource
{
    protected string $model = User::class;

    protected string $title = 'Верификация';

    /**
     * @return list<class-string<PageContract>>
     */
    protected function pages(): array
    {
        return [
            VerificationUserIndexPage::class,
        ];
    }
}
