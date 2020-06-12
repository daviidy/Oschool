<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Community extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['link',
                           'password',
                           'school_id',

                         ];



     /**
      * [users description]
      * relationship one to many with School model
      * @return [array] [description]
      */
      public function school()
      {
          return $this->belongsTo('App\School');
      }
}
