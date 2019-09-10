<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Result extends Model
{
    protected $fillable = ['quiz_id', 'user_id', 'result',];



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
}
