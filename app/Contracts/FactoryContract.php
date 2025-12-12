<?php

declare(strict_types=1);

namespace App\Contracts;

/**
 * @template T
 */
interface FactoryContract
{
    /**
     * Make a new entity.
     *
     * @return T
     */
    public static function make();
}
