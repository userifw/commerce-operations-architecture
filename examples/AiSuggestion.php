<?php

declare(strict_types=1);

namespace Showcase\Commerce;

final readonly class AiSuggestion
{
    public function __construct(
        public string $field,
        public mixed $value,
        public ?float $confidence,
        public string $sourceType,
        public ?string $sourceName,
        public string $status,
    ) {}
}
