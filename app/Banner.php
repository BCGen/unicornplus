<?php

namespace App;

use Bcgen\LaravelHelper\Medias\Traits\HasMediaTrait;
use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;

class Banner extends Model implements HasMedia
{
    use AutoAble, HasMediaTrait;

    protected $hidden = ['media'];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function getImageUrlAttribute()
    {
        return $this->getFirstMediaUrl('image');
    }
}
