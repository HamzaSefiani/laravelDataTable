<?php

namespace App\Http\Controllers\Services; 
use App\Http\Controllers\Controller; 

use Illuminate\Http\Request; 

use App\Models\City; 
use App\Models\People; 
use App\Models\Country; 

use DataTables; 


class LogicService extends Controller 
{
   // Méthode pour afficher les pays
   public function showCountries(Request $request){ 
    // Vérifie si la requête est une requête AJAX
        if ($request->ajax()) { 
            $data = Country::all(); 
            return Datatables::of($data)
             ->addIndexColumn() 
             ->make(true); // Renvoie les données au format JSON pour DataTables
        }
    
          
        // Renvoie la vue pour afficher les pays
        return view('countries.index'); 
    }


    // Méthode pour afficher les villes d'un pays
    public function showCitiesOfCountry(Country $country) 
    {
        $cities = City::where('country_id', $country->id)->get(); 

         // Sélectionne le nom du pays
        $country = Country::select('name')->where('id', $country->id)->first();

        return view('cities.index', compact('cities', 'country')); 
    }


    // Méthode pour afficher les personnes d'une ville
    public function showPeopleOfCity(City $city) 
    {
         // Récupère les personnes de la ville spécifiée
        $people = People::where('city_id', $city->id)->get();
        $city = City::select('name')->where('id', $city->id)->first(); // Sélectionne le nom de la ville

        return view('people.index', compact('people', 'city')); // Renvoie la vue pour afficher les personnes
    }
}


