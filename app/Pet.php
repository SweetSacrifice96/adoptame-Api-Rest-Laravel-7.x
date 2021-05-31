<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pet extends Model
{
    protected $guarded = ['created_at', 'updated_at'];

    public function institution()
    {
        return $this->belongsTo('App\Institution');
    }
}
