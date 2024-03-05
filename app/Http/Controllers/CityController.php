<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Services\LogicService;
use App\Models\Country;
use Illuminate\Http\Request;


class CityController extends Controller
{

    public function __construct(LogicService $logicService){
        $this->logicService = $logicService;
    }


    public function index(Country $country)
    {
        return $this->logicService->showCitiesOfCountry($country);
    }

}