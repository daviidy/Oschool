<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;


class CsvFile extends Model
{
    //

    public function school()
  {
      return $this->belongsTo('App\School');
  }

  public function users()
  {
      return $this->belongsToMany('App\User');
  }

}
