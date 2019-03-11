<?php

namespace Bcgen\LaravelHelper\Models\Traits;

use Bcgen\LaravelHelper\Medias\Traits\MediaTrait;

trait ModelMediaTrait
{
    public static function bootModelMediaTrait()
    {
        static::updating(function ($model) {
            foreach ($model->attributes as $key => $value) {
                if (ends_with($key, '_url') && array_key_exists($key, $model->original)) {
                    if ($model->attributes[$key] !== $model->original[$key]) {
                       MediaTrait::deleteFile($model->original[$key]);
                    }
                }
            }
        });

        static::deleting(function ($model) {
            foreach ($model->original as $key => $value) {
                if (ends_with($key, '_url')) {
                    MediaTrait::deleteFile($model->original[$key]);
                }
            }
        });
    }
}
