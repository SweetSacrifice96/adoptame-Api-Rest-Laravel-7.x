<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Specie extends Model
{
    public function breed()
    {
        return $this->belongsTo('App\Breed');
    }
}
