<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['date_exp',
                           'code',
                           'value',
                           'school_id',
                         ];
     /**
      * [users description]
      * relationship many to many with Courses model
      * @return [array] [description]
      */
      public function courses()
      {
          return $this->belongsToMany('App\Course');
      }

      /**
       * [users description]
       * relationship one to many with School model
       * @return [array] [description]
       */
       public function school()
       {
           return $this->belongsTo('App\School');
       }

}
