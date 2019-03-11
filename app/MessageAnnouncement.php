<?php

namespace App;

use Bcgen\LaravelHelper\Models\Traits\AutoAble;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;
use Spatie\Translatable\HasTranslations;

class MessageAnnouncement extends Model implements HasMedia
{
    use AutoAble, HasTranslations, HasMediaTrait;

    public $translatable = ['title', 'main_content'];
    public $hidden = ['media'];
    public $tags = [
        'en' => [
            'school' => 'School',
            'admission' => 'Admission',
            'event' => 'Event',
            'others' => 'Others',
        ],
        'jp' => [
            'school' => '学校',
            'admission' => '入学許可',
            'event' => 'イベント',
            'others' => 'その他',
        ],
        'zh-TW' => [
            'school' => '學校公告',
            'admission' => '招生資訊',
            'event' => '活動記錄',
            'others' => '其他事項',
        ],
    ];

    public function getTagAttribute()
    {
        $locale = App::getLocale();
        $tags = in_array($locale, array_keys($this->tags)) ? $this->tags[$locale] : $this->tags['en'];

        return $tags[$this->message_type] ?? $tags['others'];
    }

    public function getFormatDateAttribute()
    {
        return str_replace('-', '/', $this->date);
    }

    public function getImagesAttribute()
    {
        return $this->getMedia('images');
    }

    public function getFilesEnAttribute()
    {
        return $this->getMedia('files_en');
    }

    public function getFilesJpAttribute()
    {
        return $this->getMedia('files_jp');
    }

    public function getFilesAttribute()
    {
        $locale = App::getLocale();
        return $this->getMedia("files_$locale");
    }
}
