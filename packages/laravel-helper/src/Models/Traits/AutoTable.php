<?php
namespace Bcgen\LaravelHelper\Models\Traits;

trait AutoTable
{
    /**
     * Get the table associated with the model.
     *
     * @return string
     */
    public function getTable()
    {
        if (!isset($this->table)) {
            return str_replace(
                '\\', '', str_plural(snake_case(class_basename($this)))
            );
        }

        return $this->table;
    }
}
