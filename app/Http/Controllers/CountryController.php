<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Services\LogicService;
use Illuminate\Http\Request;


class CountryController extends Controller
{

    // Constructeur de la classe
    public function __construct(LogicService $logicService){
        // Initialisation du service logique
        $this->logicService = $logicService;
    }


    public function index(Request $request)
    {
        return $this->logicService->showCountries($request);
    }



}
