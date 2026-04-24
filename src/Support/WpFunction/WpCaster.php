<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

interface WpCaster
{
    public function value(mixed $value): mixed;

    /**
     * @param array<mixed> $list
     * @return array<mixed>
     */
    public function list(array $list): array;
}
