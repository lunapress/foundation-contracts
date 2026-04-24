<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\Wp;

interface WpCaster
{
    /**
     * @param null|callable(WpArgument): mixed $argumentMapper
     */
    public function value(mixed $value, ?callable $argumentMapper = null): mixed;

    /**
     * @param array<mixed> $list
     * @param null|callable(WpArgument): mixed $argumentMapper
     * @return array<mixed>
     */
    public function list(array $list, ?callable $argumentMapper = null): array;
}
