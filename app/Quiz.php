<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['course_id', 'lesson_id', 'title', 'description', 'status'];


    /**
     * [users description]
     * relationship one to many with Question model
     * @return [array] [description]
     */
     public function questions()
     {
         return $this->hasMany('App\Question');
     }

     /**
      * [users description]
      * relationship one to many with Result model
      * @return [array] [description]
      */
      public function results()
      {
          return $this->hasMany('App\Result');
      }


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
        * relationship one to many with Lesson model
        * @return [array] [description]
        */
        public function lesson()
        {
            return $this->belongsTo('App\Lesson');
        }

        public static function boot() {
        parent::boot();

        static::deleting(function($quiz) { // before delete() method call this


             $quiz->questions()->delete();
             // do the rest of the cleanup...
        });
    }




}
