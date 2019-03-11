<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

use Illuminate\Http\Request;

trait BaseControllerTrait
{
    protected function modelName()
    {
        return str_before(class_basename(get_called_class()), 'Controller');
    }

    protected function getModel($id = null)
    {
        $model = isset($this->model) ? $this->model : "\\App\\{$this->modelName()}";
        return $id ? ($model::findOrFail($id)) : $model;
    }

    protected function getPrefix()
    {
        if (isset($this->viewFolder)) {
            return trim($this->viewFolder, '.') . '.';
        }

        $afterStr = '\\Controllers\\';
        $class = get_called_class();
        $namespace = str_before(str_after($class, $afterStr), class_basename($class));

        return camel_case(str_replace('\\', '.', $namespace));
    }
}
