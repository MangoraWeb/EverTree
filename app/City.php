<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    public function Province()
    {
        return $this->belongTo('App\Province');
    }
}
