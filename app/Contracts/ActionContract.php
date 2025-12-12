<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * @template T
 */
interface ActionContract
{
    /**
     * Execute action.
     *
     * @return T
     */
    public function execute(): mixed;
}
