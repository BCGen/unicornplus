<?php

namespace Bcgen\LaravelHelper\Medias\Classes;

use Spatie\MediaLibrary\Models\Media;
use Spatie\MediaLibrary\PathGenerator\PathGenerator as Generator;

class PathGenerator implements Generator
{
    public function getPath(Media $media): string
    {
        return md5($media->id) . '/';
    }

    public function getPathForConversions(Media $media): string
    {
        return $this->getPath($media) . 'conversions/';
    }
    public function getPathForResponsiveImages(Media $media): string
    {
        return $this->getPath($media) . '/cri/';
    }
}
