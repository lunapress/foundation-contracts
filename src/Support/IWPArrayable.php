<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support;

interface IWPArrayable
{
    /**
     * @return array<string, mixed>
     */
    public function toWPArray(): array;
}
