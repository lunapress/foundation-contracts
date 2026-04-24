<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Support\WpFunction;

interface WpResolvable
{
    public function toWpValue(): mixed;
}
