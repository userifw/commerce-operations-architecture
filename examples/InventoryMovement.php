<?php

declare(strict_types=1);

namespace Showcase\Commerce;

final readonly class InventoryMovement
{
    public function __construct(
        public string $itemId,
        public int $quantityDelta,
        public int $quantityBefore,
        public int $quantityAfter,
        public string $source,
        public string $requestKey,
        public ?string $actorId,
    ) {}
}
