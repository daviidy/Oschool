<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Project extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['title',
                           'description',
                           'image',
                           'course_id',
                           'position',
                           'slug',
                           'video',
                         ];


     // /**
     //  * [users description]
     //  * relationship one to many with Course model
     //  * @return [array] [description]
     //  */
     //  public function course()
     //  {
     //      return $this->belongsTo('App\Course');
     //  }


      /**
        * [users description]
        * relationship one to many with Resource model
        * @return [array] [description]
        */
        public function resources()
        {
          return $this->hasMany('App\Resource');
        }

        /**
          * [users description]
          * relationship one to many with Task model
          * @return [array] [description]
          */
          public function tasks()
          {
            return $this->hasMany('App\Task');
          }



          public static function boot() {
          parent::boot();

          static::deleting(function($project) { // before delete() method call this

              if (File::exists(public_path('/images/projects/images/' . $project->image))) {
                  File::delete(public_path('/images/projects/images/' . $project->image));
              }
               $project->resources()->delete();
               $project->tasks()->delete();
               // do the rest of the cleanup...
          });
      }





}
