<?php

namespace AdminKit\Brand\Models;

use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Brand\Database\Factories\BrandFactory;

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
