<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Controllers\Traits\MediaTrait;
use Bcgen\LaravelHelper\Controllers\Traits\ResourceTrait;
use Bcgen\LaravelHelper\Controllers\Traits\Translatable;

class ClassCardController extends Controller
{
    use ResourceTrait, Translatable, MediaTrait;

    protected function validateRequest()
    {
        return request()->validate([
            'title_en' => '',
            'title_jp' => '',

            'main_content_en' => '',
            'main_content_jp' => '',

            'classes_en' => '',
            'classes_jp' => '',

            'image_alt_en' => '',
            'image_alt_jp' => '',

            'image' => '',
            'sort' => '',
        ]);
    }
}
