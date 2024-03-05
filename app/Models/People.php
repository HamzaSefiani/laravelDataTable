<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class People extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'city_id'];



        // Relation avec la classe City

    public function city()
{
    return $this->belongsTo(City::class);
}

}
