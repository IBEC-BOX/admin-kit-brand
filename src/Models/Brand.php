<?php

namespace AdminKit\Brand\Models;

use AdminKit\Core\Abstracts\Models\AbstractModel;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\Translatable\HasTranslations;
use AdminKit\Brand\Database\Factories\BrandFactory;

class Brand extends AbstractModel
{
    use HasFactory;
    use HasTranslations;

    protected $table = 'admin_kit_brand';

    protected $fillable = [
        'title',
    ];

    protected $casts = [
        //
    ];

    protected $translatable = [
        'title',
    ];

    protected static function newFactory(): BrandFactory
    {
        return new BrandFactory();
    }
}
