<?php

namespace AdminKit\Brand\UI\Filament\Resources;

use AdminKit\Brand\Models\Brand;
use AdminKit\Brand\UI\Filament\Resources\BrandResource\Pages;
use AdminKit\Core\Forms\Components\TranslatableTabs;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;

class BrandResource extends Resource
{
    protected static ?string $model = Brand::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\SpatieMediaLibraryFileUpload::make('site_logo')
                    ->label(__('admin-kit-brand::brand.resource.site_logo'))
                    ->required()
                    ->image(),
                TranslatableTabs::make(fn ($locale) => Forms\Components\Tabs\Tab::make($locale)->schema([
                    Forms\Components\TextInput::make('site_name.'.$locale)
                        ->label(__('admin-kit-brand::brand.resource.site_name'))
                        ->required($locale === app()->getLocale()),
                ])),
            ])
            ->columns(1);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')
                    ->label(__('admin-kit-brand::brand.resource.id'))
                    ->sortable(),
                Tables\Columns\TextColumn::make('site_name')
                    ->label(__('admin-kit-brand::brand.resource.site_name')),
                Tables\Columns\TextColumn::make('created_at')
                    ->label(__('admin-kit-brand::brand.resource.created_at')),
            ])
            ->defaultSort('id', 'desc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ])
            ->defaultSort('id', 'desc');
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBrand::route('/'),
            'create' => Pages\CreateBrand::route('/create'),
            'edit' => Pages\EditBrand::route('/{record}/edit'),
        ];
    }

    public static function getLabel(): ?string
    {
        return __('admin-kit-brand::brand.resource.label');
    }

    public static function getPluralLabel(): ?string
    {
        return __('admin-kit-brand::brand.resource.plural_label');
    }
}
