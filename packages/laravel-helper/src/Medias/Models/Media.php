<?php

namespace Bcgen\LaravelHelper\Medias\Models;

use Bcgen\LaravelHelper\Models\Traits\AutoAppend;
use Spatie\MediaLibrary\Models\Media as BaseMedia;

class Media extends BaseMedia
{
    use AutoAppend;

    public function getPathAttribute()
    {
        return $this->getPath();
    }

    public function getUrlAttribute()
    {
        return $this->getUrl();
    }
}
