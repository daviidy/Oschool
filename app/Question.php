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



      public static function boot() {
        parent::boot();

        static::deleting(function($question) { // before delete() method call this

           $question->options()->delete();
           // do the rest of the cleanup...
        });
        }


}
