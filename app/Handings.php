<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handings extends Model
{
    protected $fillable = ['unit','count','address','tel','city'];

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id');

    }


}
