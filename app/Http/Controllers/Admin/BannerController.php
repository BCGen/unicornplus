<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Bcgen\LaravelHelper\Controllers\Traits\MediaTrait;
use Bcgen\LaravelHelper\Controllers\Traits\ResourceTrait;
use Bcgen\LaravelHelper\Utils\VersionCheck;

class BannerController extends Controller
{
    use ResourceTrait, MediaTrait;
}
