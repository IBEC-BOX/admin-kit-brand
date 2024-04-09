<?php

namespace AdminKit\Brand\Models;

use AdminKit\Brand\Database\Factories\BrandFactory;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\Translatable\HasTranslations;

class Brand extends AbstractModel implements HasMedia
{
    use HasFactory;
    use HasTranslations;
    use InteractsWithMedia;

    protected $table = 'admin_kit_brand';

    protected $fillable = [
        'site_name',
    ];

    protected $translatable = [
        'site_name',
    ];

    protected static function newFactory(): BrandFactory
    {
        return new BrandFactory();
    }
}
