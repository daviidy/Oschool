<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['text', 'image', 'score', 'quiz_id'];


    /**
     * [users description]
     * relationship one to many with Option model
     * @return [array] [description]
     */
     public function options()
     {
         return $this->hasMany('App\Option');
     }

     /**
      * [users description]
      * relationship one to many with Quiz model
      * @return [array] [description]
      */
      public function quiz()
      {
          return $this->belongsTo('App\Quiz');
      }


}
