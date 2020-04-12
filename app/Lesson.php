<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

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
                           'webinar_meeting',
                           'zoom_url',

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

        /**
         * [users description]
         * relationship one to many with Quiz model
         * @return [array] [description]
         */
         public function quizzes()
         {
             return $this->hasMany('App\Quiz');
         }


         public function users()
         {
             return $this->belongsToMany('App\User');
         }


        public static function boot() {
        parent::boot();

        static::deleting(function($lesson) { // before delete() method call this

            $medias = $lesson->medias;
            foreach ($medias as $media) {
                if (File::exists(public_path('/images/lessons/resources/' . $media->name))) {
                    File::delete(public_path('/images/lessons/resources/' . $media->name));
                }
            }
            //we delete lesson image
            if (File::exists(public_path('/images/lessons/images/' . $lesson->image))) {
                File::delete(public_path('/images/lessons/images/' . $lesson->image));
            }
             $lesson->medias()->delete();
             foreach ($lesson->quizzes as $quiz) {

                 foreach ($quiz->results as $result) {
                     $result->answers()->delete();
                     $result->delete();
                 }

                 foreach ($quiz->questions as $question) {
                     $question->options()->delete();
                     $question->delete();
                 }


                 $quiz->delete();
             }
             // do the rest of the cleanup...
        });
    }
}
