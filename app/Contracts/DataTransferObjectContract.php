<?php

namespace App\Contracts;

interface DataTransferObjectContract
{
    /**
     * Present DataTransferObject as array.
     *
     * @return array<string, mixed>
     */
    public function toArray(): array;
}
