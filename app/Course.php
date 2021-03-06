<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Auth;

class Course extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'subtitle',
                           'slug',
                           'description',
                           'video',
                           'user_id',
                           'school_id',
                           'author_id',
                           'logo',
                           'category_id',
                           'type',
                           'result'
                         ];

     public function getProgression()
     {
         if ($this->type == 'mooc') {
             $progression = 0;
             if (count(Auth::user()->lessons->where('course_id', $this->id)) > 0 && count($this->lessons->where('status', 'active')) > 0) {
                 $progression = count(Auth::user()->lessons->where('course_id', $this->id)) / count($this->lessons->where('status', 'active')) * 100;
             }
             return $progression;
         }
         else {
             $number_resources_validated = 0;
             foreach ($this->resources as $resource) {
                 if ($resource->type == 'course') {
                     if (count(Auth::user()->lessons->where('course_id', $resource->link->id)) / count($resource->link->lessons->where('status', 'active')) == 1) {
                     $number_resources_validated += 1;
                     $resource->status = 1;
                     $resource->save();
                 }
                }
                else {
                 if (count(Auth::user()->deliverables->where('project_id', $resource->project->id)->where('status', '1')) > 0) {
                     $number_resources_validated += 1;
                     $resource->status = 1;
                     $resource->save();
                 }
                }
            }//end foreach
            return floor(($number_resources_validated / count($this->resources)) * 100);
         }
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

      public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }


      /**
       * [users description]
       * relationship many to many with Certificate model
       * @return [array] [description]
       */
       public function certificates()
       {
           return $this->hasMany('App\Certificate');
       }

       /**
        * [users description]
        * relationship many to many with Deliverable model
        * @return [array] [description]
        */
        public function deliverables()
        {
            return $this->hasMany('App\Deliverable');
        }


     /**
      * [users description]
      * relationship one to many with User model
      * @return [array] [description]
      */
      public function author()
      {
          return $this->belongsTo('App\Author');
      }


      /**
       * [users description]
       * relationship one to many with Category model
       * @return [array] [description]
       */
       public function category()
       {
           return $this->belongsTo('App\Category');
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


        /**
         * [users description]
         * relationship one to many with Pricing model
         * @return [array] [description]
         */
         public function pricings()
         {
             return $this->hasMany('App\Pricing');
         }


         /**
          * [users description]
          * relationship one to many with Section model
          * @return [array] [description]
          */
          public function sections()
          {
              return $this->hasMany('App\Section');
          }

          // /**
          //  * [users description]
          //  * relationship one to many with Project model
          //  * @return [array] [description]
          //  */
          //  public function projects()
          //  {
          //      return $this->hasMany('App\Project');
          //  }

          /**
           * [users description]
           * relationship one to many with Lesson model
           * @return [array] [description]
           */
           public function lessons()
           {
               return $this->hasMany('App\Lesson');
           }


           /**
            * [users description]
            * relationship one to many with Purchase model
            * @return [array] [description]
            */
            public function purchases()
            {
                return $this->hasMany('App\Purchase');
            }


            /**
             * [users description]
             * relationship many to many with Coupon model
             * @return [array] [description]
             */
             public function coupons()
             {
                 return $this->belongsToMany('App\Coupon');
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

              /**
              * [users description]
              * relationship many to many with Courses model
              * @return [array] [description]
              */

              public function informations()
              {
                 return $this->belongsToMany('App\Information');
              }

              public function faqs()
              {
                return $this->hasMany('App\Faq');
              }

              public function resources()
              {
                return $this->hasMany('App\Resource', 'path_id');
              }

              public function links()
              {
                return $this->hasMany('App\Resource', 'course_id');
              }

           public static function boot() {
           parent::boot();

           static::deleting(function($course) { // before delete() method call this

               if (File::exists(public_path('/images/courses/logos/' . $course->logo))) {
                   File::delete(public_path('/images/courses/logos/' . $course->logo));
               }

               $course->deliverables()->delete();

                foreach ($course->projects as $project) {
                    $project->tasks()->delete();
                    $project->resources()->delete();
                    $project->delete();
                }

                foreach ($course->pricings as $pricing) {
                    $pricing->purchases()->delete();
                    $pricing->delete();
                }

                foreach ($course->quizzes as $quiz) {

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

                $course->lessons()->delete();
                $course->sections()->delete();
                // do the rest of the cleanup...
           });
       }






}
