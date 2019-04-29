<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Country extends Model
{
    protected $table = 'countries';

    public function city() {
        return $this->hasMany('App\City');
    }
}

