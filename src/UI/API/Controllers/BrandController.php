<?php

declare(strict_types=1);

namespace AdminKit\Brand\UI\API\Controllers;

use AdminKit\Brand\Models\Brand;

class BrandController extends Controller
{
    public function index()
    {
        return Brand::all();
    }

    public function show(int $id)
    {
        return Brand::findOrFail($id);
    }
}
