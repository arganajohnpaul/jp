<?php

namespace Arden;
use BaseController;
class ShopController extends BaseController
{
    public function __construct()
    {
        $model = new OpeningTimesModel();
        $this->modelData = $model->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }
}