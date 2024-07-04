<?php

namespace AdminKit\Brand\UI\API\Data;

use AdminKit\Brand\Models\Brand;
use Spatie\LaravelData\Attributes\MapName;
use Spatie\LaravelData\Concerns\WithDeprecatedCollectionMethod;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapName(SnakeCaseMapper::class)]
class BrandData extends Data
{
    use WithDeprecatedCollectionMethod;

    public function __construct(
        public string $siteName,
        public string $siteLogo,
    ) {
    }

    public static function fromModel(Brand $brand): self
    {
        return new self(
            siteName: $brand->site_name,
            siteLogo: $brand->getFirstMediaUrl(),
        );
    }
}
