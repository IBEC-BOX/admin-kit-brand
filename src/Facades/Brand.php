<?php

namespace AdminKit\Brand\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \AdminKit\Brand\Brand
 */
class Brand extends Facade
{
    protected static function getFacadeAccessor()
    {
        return \AdminKit\Brand\Brand::class;
    }
}
