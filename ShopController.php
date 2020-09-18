<?php

namespace Arden;
use OpeningTimesModel;
use TopProductsModel;
class ShopController extends BaseController
{
    public function __construct()
    {
        $model = new OpeningTimesModel();
        $this->modelData = $model->getData();

        $modelTopProducts = new TopProductsModel();
        $this->modelTopProductsData = $modelTopProducts->getData();
    }

    public function getModelData() {
        return $this->modelData;
    }    

    public function getModelDataTopProducts() {
        return $this->modelTopProductsData;
    }
}