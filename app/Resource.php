<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resource extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['link',
                           'type',
                           'project_id',
                           'position',
                           'title',
                           'course_id',
                           'path_id'
                         ];


     /**
      * [users description]
      * relationship one to many with Project model
      * @return [array] [description]
      */
      public function project()
      {
          return $this->belongsTo('App\Project');
      }

      /**
       * [users description]
       * relationship one to many with Course model
       * @return [array] [description]
       */
       public function course()
       {
           return $this->belongsTo('App\Course', 'path_id');
       }

       public function link()
       {
           return $this->belongsTo('App\Course', 'course_id');
       }

       public function users()
       {
           return $this->belongsToMany('App\User');
       }
}
