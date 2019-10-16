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
                           'project_id'
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
}
