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
                           'course_id'
                         ];


     /**
      * [users description]
      * relationship one to many with Course model
      * @return [array] [description]
      */
      public function course()
      {
          return $this->belongsTo('App\Course');
      }
}
