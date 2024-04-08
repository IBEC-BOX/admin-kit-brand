<?php

namespace AdminKit\Brand\UI\Filament\Resources\BrandResource\Pages;

use AdminKit\Brand\UI\Filament\Resources\BrandResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

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
