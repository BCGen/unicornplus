<?php

namespace Bcgen\LaravelHelper\Medias\Traits;

use Illuminate\Support\Str;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait as MediaTrait;

trait HasMediaTrait
{
    use MediaTrait;

    public function getFirstMediaName(string $collectionName = 'default'): string
    {
        $media = $this->getFirstMedia($collectionName);

        if (!$media) {
            return '';
        }

        return $media->name;
    }

    public function getFirstMediaId(string $collectionName = 'default'): string
    {
        $media = $this->getFirstMedia($collectionName);

        if (!$media) {
            return '';
        }

        return $media->id;
    }
}
