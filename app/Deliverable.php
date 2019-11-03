<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deliverable extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['link',
                           'status',
                           'comment',
                           'project_id',
                           'user_id'
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
      public function user()
      {
          return $this->belongsTo('App\User');
      }
}
