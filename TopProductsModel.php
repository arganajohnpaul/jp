<?php

use Arden\Model as Model;

class TopProductsModel extends Model
{
    public function __construct()
    {
        $this->data = [
            'ranking' => ['1', '2', '3', '4', '5'],
            'images' => [
                '1' => '<img src="statics/1.png"/>',
                '2' => '<img src="statics/2.jpg"/>',
                '3' => '<img src="statics/3.jpg"/>',
                '4' => '<img src="statics/4.jpg"/>',
                '5' => '<img src="statics/5.jpg"/>'
            ]
        ];
    }

    public function getData()
    {
        return $this->data;
    }
}