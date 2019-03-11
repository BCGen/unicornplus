<?php
namespace Bcgen\LaravelHelper\Models\Traits;

trait AutoFillable
{
    public function getFillable()
    {
        if ($this->autoFillable === false || count($this->fillable) !== 0) {
            return $this->fillable;
        }

        $fields = \Schema::getColumnListing($this->getTable());

        return $this->fillable = array_filter($fields, function ($value) {
            return !in_array($value, ['id', 'created_at', 'updated_at']);
        });

    }
}
