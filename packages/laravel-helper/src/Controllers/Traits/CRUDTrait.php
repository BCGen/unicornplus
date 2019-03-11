<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

use Bcgen\LaravelHelper\Medias\Traits\MediaTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Str;

trait CRUDTrait
{
    use BaseControllerTrait;
    use MediaTrait;

    public $redirect;
    public $afterEventHooks = ['translate', 'media', 'createChildModel', 'afterAction'];

    public function store(Request $request)
    {
        $data = $this->validateStoreRequest();
        $data = $this->beforeHook('store', $data);
        $model = $this->storeData($this->getModel(), $data);
        $this->afterHook('store', $model, $data);

        return redirect($this->getRedirect())->with($this->storeSuccessMessage());
    }

    public function update(Request $request, $id)
    {
        $model = $this->getModel($id);
        $data = $this->validateUpdateRequest();
        $data = $this->beforeHook('update', $data);
        $this->updateData($model, $data);
        $this->afterHook('update', $model, $data);

        return redirect($this->getRedirect())->with($this->updateSuccessMessage());
    }

    public function destroy($id)
    {
        $model = $this->getModel($id);
        $model->delete();
        $this->deleteChildModel($model);
    }

    // event
    public function storeData($model, $data)
    {
        return $model::create($data);
    }

    public function updateData($model, $data)
    {
        $model->update($data);
    }

    // validator
    public function validateStoreRequest()
    {
        return $this->validateData();
    }

    public function validateUpdateRequest()
    {
        return $this->validateData();
    }

    // Message
    public function storeSuccessMessage()
    {
        return ['message' => __('message.create_successful')];
    }

    public function updateSuccessMessage()
    {
        return ['message' => __('message.update_successful')];
    }

    // Helper
    protected function beforeHook($event, $data)
    {
        $function = 'beforeAction';
        $storeUpdateFunction = $function . Str::studly($event);

        if (method_exists($this, $storeUpdateFunction)) {
            return $this->$function($data);
        } else if (method_exists($this, $function)) {
            return $this->$method($storeUpdateFunction);
        }
        return $data;
    }

    protected function afterHook($event, $model, $data)
    {
        foreach ($this->afterEventHooks as $key => $method) {
            $function = $method . Str::studly($event);

            if (method_exists($this, $function)) {
                $data = $this->$function($model, $data) ?? $data;
            } else if (method_exists($this, $method)) {
                $data = $this->$method($model, $data) ?? $data;
            }
        }
    }

    protected function validateData()
    {
        return method_exists($this, 'validateRequest') ? $this->validateRequest() : request()->all();
    }

    protected function getRedirect()
    {
        if (isset($this->redirect)) {
            return $this->redirect;
        }

        //  plural string route
        $redirect = $this->getPrefix() . str_plural(snake_case($this->modelName())) . '.index';

        if (Route::has($redirect)) {
            return route($redirect);
        } else {
            //  singular string route
            $redirect = $this->getPrefix() . snake_case($this->modelName()) . '.index';
            return route($redirect);
        }
    }

    protected function createChildModel($model, $data)
    {
        if (isset($this->hasMany) && gettype($this->hasMany) === 'array') {
            foreach ($this->hasMany as $childModel => $field) {
                if (array_key_exists($field, $data)) {
                    $model->hasMany($childModel)->createMany($data[$field]);
                }
            }
        }
    }

    protected function deleteChildModel($model)
    {
        if (isset($this->hasMany) && gettype($this->hasMany) === 'array') {
            foreach (array_keys($this->hasMany) as $childModel) {
                foreach ($model->hasMany($childModel)->get() as $data) {
                    $data->delete();
                };
            }
        }
    }
}
