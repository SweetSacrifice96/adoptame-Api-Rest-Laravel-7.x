<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Institution extends Model
{
    protected $fillable = ['name', 'phone', 'email'];


    public function pets()
    {
            return $this->hasMany('App\Pet');
    }
}
