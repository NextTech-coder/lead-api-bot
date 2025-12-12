<?php

declare(strict_types=1);

namespace App\Contracts;

interface DataTransferObjectContract
{
    /**
     * Present DataTransferObject as array.
     *
     * @return array<string, scalar>
     */
    public function toArray(): array;
}
