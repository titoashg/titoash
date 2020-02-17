<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class companyflight extends Model
{
    //
    public function username()
    {
        return User::where('id',$this->created_by)->first();
    }
}
