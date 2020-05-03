<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
        /**
     * [protected description]
     * @var [array]
     */

    protected $fillable = ['site_id',
                           'api_key',
                           'school_id',
                           'type'
                         ];


       /**
      * [payments description]
      * relationship one to many with School model
      * @return [array] [description]
      */
      public function School()
      {
          return $this->belongsTo('App\School');
      }
}
