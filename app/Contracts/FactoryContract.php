<?php

namespace App\Contracts;

interface FactoryContract
{
    /**
     * Make a new entity.
     *
     * @return mixed
     */
    public static function make(): mixed;
}
