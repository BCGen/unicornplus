<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Controllers\Traits\MediaTrait;
use Bcgen\LaravelHelper\Controllers\Traits\ResourceTrait;
use Bcgen\LaravelHelper\Controllers\Traits\Translatable;

class MessageAnnouncementController extends Controller
{
    use ResourceTrait, Translatable, MediaTrait;

    protected function validateRequest()
    {
        return request()->validate([
            'title_en' => '',
            'title_jp' => '',

            'main_content_en' => '',
            'main_content_jp' => '',

            'date' => '',
            'sort' => '',
            'message_type' => '',

            'images' => '',
            'files_en' => '',
            'files_jp' => '',
        ]);
    }
}
