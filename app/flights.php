<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class flights extends Model
{
    //

    public function Airportdeparture()
    {
        return App\airport::where('id',$this->date_departure)->first();
    }

    public function Airportarrivel()
    {
        return App\airport::where('id',$this->date_arrivel)->first();
    }
}
