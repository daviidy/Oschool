<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    //
        protected $fillable = [
                        'date'
                        'link'
                        'user_id'
                        'comment'
                        'status'
                         ];
     /**
      * [users description]
      * relationship many to many with User  model
      * @return [array] [description]
      */
  

      public function users()
      {
          return $this->belongsToMany('App\User');
      }

      public function teacher()
      {
          return $this->belongsToMany('App\User');
      }

}
