<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Controllers\Traits\MediaTrait;
use Bcgen\LaravelHelper\Controllers\Traits\ResourceTrait;

class FormDownloadController extends Controller
{
    use ResourceTrait, MediaTrait;

    protected function validateRequest()
    {
        return request()->validate([
            'file' => '',
            'sort' => '',
            'lang' => ''
        ]);
    }
}
