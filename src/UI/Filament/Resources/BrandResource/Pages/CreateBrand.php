<?php

namespace AdminKit\Brand\UI\Filament\Resources\BrandResource\Pages;

use AdminKit\Brand\UI\Filament\Resources\BrandResource;
use Filament\Resources\Pages\CreateRecord;

class CreateBrand extends CreateRecord
{
    protected static string $resource = BrandResource::class;

    protected function getActions(): array
    {
        return [
            //
        ];
    }

    protected function getRedirectUrl(): string
    {
        return BrandResource::getUrl();
    }
}
