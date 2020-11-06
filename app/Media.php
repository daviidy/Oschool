<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    protected $fillable = ['name',
                           'lesson_id',

                         ];


     /**
      * [users description]
      * relationship one to many with Lesson model
      * @return [array] [description]
      */
      public function course()
      {
          return $this->belongsTo('App\Lesson');
      }

      public function deliverable()
      {
          return $this->belongsTo('App\Deliverable');
      }
}
