<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class School extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'heading',
                           'description',
                           'state',
                           'street',
                           'city',
                           'postal_code',
                           'country',
                           'slug',
                           'status',
                           'logo',
                           'background',
                           'overlay',
                           'user_id',
                           'domain',
                           'token',
                           'section1',
                           'section2',
                         ];

     /**
      * [users description]
      * relationship one to one with Color model
      * @return [array] [description]
      */
      public function color()
      {
          return $this->hasOne('App\Color');
      }

    /**
     * [users description]
     * relationship many to many with User model
     * @return [array] [description]
     */
     public function users()
     {
         return $this->belongsToMany('App\User');
     }

     //function to be invited as admin in a school
     public function adminUsers()
       {
         return $this->belongsToMany('App\User', 'admin_school', 'school_id', 'user_id');
       }

     /**
      * [courses description]
      * relationship many to many with Course model
      * @return [array] [description]
      */
     public function courses()
     {
         return $this->hasMany('App\Course');
     }

     /**
      * [user description]
      * @return [type] [description]
      */
     public function user()
     {
         return $this->belongsTo('App\User');
     }

     /**
      * [authors description]
      * relationship one to many with Author model
      * @return [type] [description]
      */
     public function authors()
     {
         return $this->hasMany('App\Author');
     }

     public function classrooms()
      {
          return $this->hasMany('App\Classroom');
      }

      public function communities()
      {
          return $this->hasMany('App\Community');
      }

    public function csv_file()
          {
              return $this->hasMany('App\CsvFile');
          }

      public function faqs()
      {
          return $this->hasMany('App\Faq');
      }

      /**
       * [users description]
       * relationship one to many with Coupon model
       * @return [array] [description]
       */
       public function coupons()
       {
           return $this->hasMany('App\Coupon');
       }

       public function categories()
       {
           return $this->hasMany('App\Category');
       }

            /**
      * [School description]
      * relationship one to many with Payments model
      * @return [array] [description]
      */
      public function payments()
      {
          return $this->hasMany('App\Payments');
      }
     public static function boot() {
     parent::boot();

     static::deleting(function($school) { // before delete() method call this

         if (File::exists(public_path('/images/schools/logos/' . $school->logo))) {
             File::delete(public_path('/images/schools/logos/' . $school->logo));
         }
         foreach ($school->courses as $course) {
             foreach ($course->lessons as $lesson) {
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
                 }
                 $lesson->quizzes()->delete();
             }
             $course->lessons()->delete();
             $course->sections()->delete();
             $course->deliverables()->delete();
             $course->projects()->delete();
             $course->delete();
         }
          $school->authors()->delete();
          // do the rest of the cleanup...
     });
 }

}
