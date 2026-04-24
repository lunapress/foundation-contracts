<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\Plugin;

interface Context
{
    public function getPrefix(): string;
    public function getNamespace(): string;
}
