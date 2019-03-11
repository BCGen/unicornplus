<?php

namespace App;

use Bcgen\LaravelHelper\Medias\Traits\HasMediaTrait;
use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\Translatable\HasTranslations;

class SchoolEnvironment extends Model implements HasMedia
{
    use AutoAble, HasTranslations, HasMediaTrait;

    public $translatable = ['title', 'main_content', 'image_alt'];
    public $hidden = ['media'];

    public function registerMediaCollections()
    {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function getImageUrlAttribute() {
        return $this->getFirstMediaUrl('image');
    }
}
