<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    protected $fillable = ['title',
                           'position',
                           'course_id',

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

      /**
       * [users description]
       * relationship one to many with Course model
       * @return [array] [description]
       */
       public function lessons()
       {
           return $this->hasMany('App\Lesson');
       }
}
