<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Option extends Model
{
    protected $fillable = ['question_id', 'text', 'correct', 'quiz_id'];



       /**
        * [users description]
        * relationship one to many with Question model
        * @return [array] [description]
        */
        public function question()
        {
            return $this->belongsTo('App\Question');
        }

        //function for relmationship between
        //option and answers (one to many)
        public function answers()
        {
            return $this->hasMany('App\Answer');
        }
}
