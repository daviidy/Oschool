<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Characteristic extends Model
{
    protected $fillable=['description'];

    public function offers()
    {
        return $this->belongsToMany('App\Offer');
    }

}
