<?php

namespace AdminKit\Brand\UI\Filament\Resources\BrandResource\Pages;

use Filament\Resources\Pages\CreateRecord;
use AdminKit\Brand\UI\Filament\Resources\BrandResource;

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
