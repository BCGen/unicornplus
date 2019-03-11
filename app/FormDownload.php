<?php

namespace App;

use Bcgen\LaravelHelper\Medias\Traits\HasMediaTrait;
use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class FormDownload extends Model implements HasMedia
{
    use AutoAble, HasMediaTrait;

    public function registerMediaCollections()
    {
        $this->addMediaCollection('file')
            ->singleFile();
    }

    public function getFileUrlAttribute()
    {
        return $this->getFirstMediaUrl('file');
    }

    public function getFileNameAttribute()
    {
        return $this->getFirstMediaName('file');
    }

    public function getFileIdAttribute()
    {
        return $this->getFirstMediaId('file');
    }
}
