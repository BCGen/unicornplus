<?php

namespace Bcgen\LaravelHelper\Controllers\Traits;

/**
 *  default setting
 *
 *  $viewFolder;
 *
 *  $indexDataName = 'list';
 *  $editDataName = 'item';
 *  $showDataName = 'item';
 *
 *  $orderBy = 'sort';
 *  $orderByDesc = true;
 */
trait ResourceTrait
{
    use APITrait, CRUDTrait {
        APITrait::modelName insteadof CRUDTrait;
        APITrait::getModel insteadof CRUDTrait;
        APITrait::getPrefix insteadof CRUDTrait;
    }
}
