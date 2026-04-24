<?php

declare(strict_types=1);

namespace LunaPress\FoundationContracts\ServicePackage;

use LunaPress\FoundationContracts\PackageMeta\PackageMeta;

final readonly class ServicePackageMeta
{
    public function __construct(
        public PackageMeta $base,
        public ?string $diPath,
    ) {
    }
}
