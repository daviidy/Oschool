<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Answer extends Model
{
    protected $fillable = ['result_id', 'question_id', 'option_id', 'correct', 'user_id'];




        /**
         * [users description]
         * relationship one to many with Option model
         * @return [array] [description]
         */
         public function option()
         {
             return $this->belongsTo('App\Option');
         }



         /**
          * [users description]
          * relationship one to many with Result model
          * @return [array] [description]
          */
          public function result()
          {
              return $this->belongsTo('App\Result');
          }


          /**
           * [users description]
           * relationship one to many with Question model
           * @return [array] [description]
           */
           public function question()
           {
               return $this->belongsTo('App\Question');
           }
}
