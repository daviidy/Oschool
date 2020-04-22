<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','school_id'];

    /**
     * [users description]
     * relationship many to many with Course model
     * @return [array] [description]
     */
     public function courses()
     {
         return $this->hasMany('App\Course');
     }
     public function school()
     {
         return $this->belongsTo('App\School');
     }
}
