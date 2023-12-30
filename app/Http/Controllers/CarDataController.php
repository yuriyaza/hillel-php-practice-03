<?php

namespace App\Http\Controllers;

use App\CarDataFormat\Context;
use App\CarDataFormat\FormatStrategyDash;
use App\CarDataFormat\FormatStrategySlash;

class CarDataController extends Controller
{
    public function format()
    {
        $carList = [
            (object)[
                'brandName' => 'Ford',
                'model' => 'Mustang',
                'modelDetails' => 'GT rest 2',
                'modelYear' => '2014',
                'productionYear' => '2013',
                'color' => 'Oxford White'
            ],
            (object)[
                'brandName' => 'BMW',
                'model' => '520i',
                'modelDetails' => 'rest',
                'modelYear' => '2001',
                'productionYear' => '2001',
                'color' => 'Green'
            ],
            (object)[
                'brandName' => 'Toyota',
                'model' => 'Camry',
                'modelDetails' => 'premium',
                'modelYear' => '2013',
                'productionYear' => '2020',
                'color' => 'Black'
            ],
            (object)[
                'brandName' => 'Mercedes',
                'model' => 'GLK',
                'modelDetails' => 'rest',
                'modelYear' => '2018',
                'productionYear' => '2022',
                'color' => 'White',
            ]
        ];

        $dataFormat = new Context($carList);
        var_dump($dataFormat->setStrategy(new FormatStrategyDash())->executeStrategy());
        var_dump($dataFormat->setStrategy(new FormatStrategySlash())->executeStrategy());
    }
}
