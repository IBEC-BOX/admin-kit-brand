<?php

declare(strict_types=1);

namespace AdminKit\Brand\UI\API\Controllers;

use AdminKit\Brand\Models\Brand;
use AdminKit\Brand\UI\API\Data\BrandData;

class BrandController extends Controller
{
    public function showFirst(): BrandData
    {
        $brand = Brand::query()->first();

        return BrandData::from($brand);
    }
}
