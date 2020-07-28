<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['quiz_id', 'user_id', 'quiz_result', 'restart',];



      /**
       * [users description]
       * relationship one to many with Quiz model
       * @return [array] [description]
       */
       public function quiz()
       {
           return $this->belongsTo('App\Quiz');
       }



       /**
        * [users description]
        * relationship one to many with User model
        * @return [array] [description]
        */
        public function user()
        {
            return $this->belongsTo('App\User');
        }


        /**
         * [users description]
         * relationship one to many with Answer model
         * @return [array] [description]
         */
         public function answers()
         {
             return $this->hasMany('App\Answer');
         }
}
