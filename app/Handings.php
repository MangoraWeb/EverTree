<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handings extends Model
{
    protected $fillable = ['unit','count','address','tel','city'];

    public function userhand()
    {
        return $this->belongsTo('App\User');
    }


}
