<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    protected $fillable = ['title',
                           'slug',
                           'image',
                           'course_id',
                           'section_id',
                           'full_text',
                           'position',
                           'status',
                           'free_lesson',
                           'video',

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
       * relationship one to many with Section model
       * @return [array] [description]
       */
       public function section()
       {
           return $this->belongsTo('App\Section');
       }

       /**
        * [users description]
        * relationship one to many with Media model
        * @return [array] [description]
        */
        public function medias()
        {
            return $this->hasMany('App\Media');
        }
}
