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


       public static function boot() {
       parent::boot();

       static::deleting(function($section) { // before delete() method call this

            $section->lessons()->delete();
            // do the rest of the cleanup...
       });
   }

}
