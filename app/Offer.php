<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offer extends Model
{
    protected $fillable=[
        'name',
        'price'
    ];

    public function characteristics()
    {
        return $this->belongsToMany('App\Characteristic','characteristic_offer','offer_id','characteristic_id');
    }

    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }

    public function users()
    {
        return $this->hasMany('App\User');
    }
}
