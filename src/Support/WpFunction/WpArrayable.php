<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

interface WpArrayable
{
    /**
     * @return array<string, mixed>
     */
    public function toWpArray(): array;
}
