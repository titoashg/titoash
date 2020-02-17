<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class airport extends Model
{
    //
    public function username()
    {
        return User::where('id',$this->created_by)->first();
    }
}
