<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Information extends Model
{
    //
    protected $fillable = [
                        'text'
                         ];
     /**
      * [users description]
      * relationship many to many with Courses model
      * @return [array] [description]
      */
      public function courses()
      {
          return $this->belongsToMany('App\Course');
      }

}
