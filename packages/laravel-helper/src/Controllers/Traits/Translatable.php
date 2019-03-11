<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

use Illuminate\Support\Str;

trait Translatable
{
    public $languages = ['en', 'jp'];

    public function translate($model, $data)
    {
        if (property_exists($model, 'translatable')) {

            foreach ($model->translatable as $fieldKey => $field) {
                foreach ($this->languages as $langKey => $language) {
                    foreach ($data as $key => $value) {
                        $fieldName = $field . '_' . $language;
                        if ($key === $fieldName) {
                            $model->setTranslation($field, $language, $data[$fieldName]);
                        }
                    }
                }
            }

            $model->save();
        }
    }
}
