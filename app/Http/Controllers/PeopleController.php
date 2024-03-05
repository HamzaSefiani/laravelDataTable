<?php

namespace App\Http\Controllers;

use App\Models\City;
use Illuminate\Http\Request;
use App\Http\Controllers\Services\LogicService;

class PeopleController extends Controller
{
    
    public function __construct(LogicService $logicService){
        $this->logicService = $logicService;
    }


    public function index(City $city)
    {
        return $this->logicService->showPeopleOfCity($city);
    }
}
