<?php

namespace App\Models;

use App\Models\People;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'country_id'];


        // Relation avec la classe Country

    public function country()
{
    return $this->belongsTo(Country::class);
}


        // Relation avec la classe People

public function people()
{
    return $this->hasMany(People::class);
}
}
