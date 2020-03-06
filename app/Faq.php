<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Faq extends Model
{
    //
     protected $fillable = [
                    'questions',
                    'reponses',
                    'school_id',
                     ];

    public function school()
  {
      return $this->belongsTo('App\School');
  }
}
