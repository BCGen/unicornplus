<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

use Illuminate\Http\Request;

trait APITrait
{
    use BaseControllerTrait;

    public $indexDataName = 'list';
    public $editDataName = 'item';
    public $showDataName = 'item';
    public $orderBy = 'sort';
    public $orderByDesc = true;
    public $viewFolder;

    /**
     * index
     *
     * if ajax request, return json data, else return index view with indexData()
     */
    public function index()
    {
        $data = $this->indexData($this->getModel());
        return $this->makeResponse('index', $data);
    }

    /**
     * create
     *
     * return create view.
     */
    public function create()
    {
        return view($this->getView('create'));
    }

    /**
     * edit
     *
     * if ajax request, return json data, else return edit view with editData()
     */
    public function edit($id)
    {
        $data = $this->editData($this->getModel($id));

        return $this->makeResponse('edit', $data);
    }

    /**
     * show
     *
     * if ajax request, return json data, else return show view with showData()
     */
    public function show($id)
    {
        $data = $this->showData($this->getModel($id));
        return $this->makeResponse('show', $data);
    }

    public function indexData($model)
    {
        $hasOrderProperty = \Schema::hasColumn(app($model)->getTable(), $this->orderBy);
        $order = $this->orderByDesc ? 'DESC' : 'ASC';

        if ($hasOrderProperty) {
            $data = $model::orderBy($this->orderBy, $order)->get();
        } else {
            $data = $model::orderBy('id', $order)->get();
        }

        return request()->ajax() ? $data : [$this->indexDataName => $data];
    }

    public function editData($data)
    {
        return request()->ajax() ? $data : [$this->editDataName => $data];
    }

    public function showData($data)
    {
        return request()->ajax() ? $data : [$this->showDataName => $data];
    }

    // Helper function
    protected function makeResponse($viewType, $data)
    {
        return request()->ajax() ? response()->json($data) : view($this->getView($viewType), $data);
    }

    protected function getView($name)
    {
        if (isset($this->$name)) {
            return $this->$name;
        }

        return $this->getPrefix() . camel_case($this->modelName()) . "." . $name;
    }
}
