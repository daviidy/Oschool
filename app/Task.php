<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['heading',
                           'description',
                           'image',
                           'project_id',
                           'position'
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


      //function for relationship between
      //user and tasks (many to many)
      public function users()
      {
          return $this->belongsToMany('App\User');
      }
}
