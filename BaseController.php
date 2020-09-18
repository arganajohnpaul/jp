<?php

namespace Arden;

abstract class BaseController
{
    protected $modelData;
    protected $modelTopProductsData;

    abstract public function getModelData();
    abstract public function getModelDataTopProducts();
}