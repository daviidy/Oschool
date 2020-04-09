<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Drip extends Model
{
    protected $fillable = ['date',
                           'days',
                           'state',
                           'section_id'

                         ];


     /**
      * [users description]
      * relationship one to one with Section model
      * @return [array] [description]
      */
      public function section()
      {
          return $this->belongsTo('App\Section');
      }
}
