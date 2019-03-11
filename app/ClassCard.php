<?php

namespace App;

use Bcgen\LaravelHelper\Medias\Traits\HasMediaTrait;
use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\Translatable\HasTranslations;

class ClassCard extends Model implements HasMedia
{
    use AutoAble, HasTranslations, HasMediaTrait;

    public $translatable = ['title', 'main_content', 'classes', 'image_alt'];

    protected $hidden = ['media'];

    public function registerMediaCollections() {
        $this->addMediaCollection('image')
            ->singleFile();
    }

    public function getImageUrlAttribute() {
        return $this->getFirstMediaUrl('image');
    }
}
