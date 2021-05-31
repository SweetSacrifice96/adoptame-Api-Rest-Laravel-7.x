<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Breed extends Model
{
    protected $fillable = ['name', 'specie_id'];

    public function species()
    {
        return $this->hasMany('App\Specie');
    }
}
