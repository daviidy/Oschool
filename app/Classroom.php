<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Classroom extends Model
{
    protected $fillable = [
                    'date',
                    'link',
                    'user_id',
                    'school_id',
                    'comment',
                    'status',
                    'statut',
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
      return $this->belongsTo('App\User', 'user_id');
  }

  public function school()
  {
      return $this->belongsTo('App\School');
  }
}
