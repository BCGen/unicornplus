<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

trait MediaTrait
{
    public function media($model, $data)
    {
        foreach (request()->allFiles() as $key => $upload) {
            if (array_key_exists($key, $data)) {
                if (is_array($upload)) {
                    foreach ($upload as $fileKey => $file) {
                        $this->AddMediaToCollection($model, $file, $key);
                    }
                } else {
                    $this->AddMediaToCollection($model, $upload, $key);
                }
            }
        }
    }

    protected function AddMediaToCollection($model, $media, $key)
    {
        $model->addMedia($media)->toMediaCollection($key);
    }
}
