<?php

namespace AdminKit\Brand;

use AdminKit\Brand\UI\Filament\Resources\BrandResource;
use Filament\Contracts\Plugin;
use Filament\Panel;

class FilamentPlugin implements Plugin
{
    public function getId(): string
    {
        return 'filament-plugin-admin-kit-brand';
    }

    public function register(Panel $panel): void
    {
        $panel->resources([
            BrandResource::class,
        ]);
    }

    public function boot(Panel $panel): void {}

    public static function make(): static
    {
        return app(static::class);
    }
}
