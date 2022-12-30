<?php

namespace App\Library;

use App\Models\Category;
use App\Models\Maker;

class Functions
{
    public static function getCategories()
    {
        return Category::orderBy('id')->get();
    }

    public static function getMakers()
    {
        return Maker::orderBy('id')->get();
    }
}
