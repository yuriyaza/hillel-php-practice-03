<?php

namespace App\Http\Controllers;

use App\CarDataFormat\Context;
use App\CarDataFormat\FormatStrategyDash;
use App\CarDataFormat\FormatStrategySlash;
use Illuminate\Http\Request;

class CarDataController extends Controller
{
    private function generateSourceData()
    {
        $car1 = new \stdClass();
        $car1->brandName = 'Ford';
        $car1->model = 'Mustang';
        $car1->modelDetails = 'GT rest 2';
        $car1->modelYear = '2014';
        $car1->productionYear = '2013';
        $car1->color = 'Oxford White';

        $car2 = new \stdClass();
        $car2->brandName = 'BMW';
        $car2->model = '520i';
        $car2->modelDetails = 'rest';
        $car2->modelYear = '2001';
        $car2->productionYear = '2001';
        $car2->color = 'Green';

        $car3 = new \stdClass();
        $car3->brandName = 'Mercedes';
        $car3->model = 'GLK';
        $car3->modelDetails = 'rest';
        $car3->modelYear = '2018';
        $car3->productionYear = '2022';
        $car3->color = 'White';

        $car4 = new \stdClass();
        $car4->brandName = 'Toyota';
        $car4->model = 'Camry';
        $car4->modelDetails = 'premium';
        $car4->modelYear = '2013';
        $car4->productionYear = '2020';
        $car4->color = 'Black';

        return [$car1, $car2, $car3, $car4];
    }

    public function execute()
    {
        $carList = $this->generateSourceData();

        $carDataFormat = new Context($carList);
        var_dump($carDataFormat->setStrategy(new FormatStrategyDash())->executeStrategy());
        var_dump($carDataFormat->setStrategy(new FormatStrategySlash())->executeStrategy());
    }
}
