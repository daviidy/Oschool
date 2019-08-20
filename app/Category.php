<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name'];

    /**
     * [users description]
     * relationship many to many with Course model
     * @return [array] [description]
     */
     public function users()
     {
         return $this->belongsToMany('App\Course');
     }
}
