<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\PackageMeta;

final readonly class PackageMeta
{
    public function __construct(
        public string $name,
        public PackageType $type,
    ) {
    }
}
