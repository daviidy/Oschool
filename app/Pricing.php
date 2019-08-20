<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'type',
                           'price',
                           'recurring',
                           'per',
                           'times',
                           'school_id'

                         ];


     /**
      * [users description]
      * relationship many to many with Course model
      * @return [array] [description]
      */
      public function users()
      {
          return $this->belongsTo('App\Course');
      }
}
