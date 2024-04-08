<?php

namespace AdminKit\Brand\UI\Filament\Resources\BrandResource\Pages;

use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use AdminKit\Brand\UI\Filament\Resources\BrandResource;

class ListBrand extends ListRecords
{
    protected static string $resource = BrandResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
