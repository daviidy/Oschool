<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{

    protected $fillable = ['full_name', 'headline', 'bio', 'image', 'school_id'];

    /**
     * [school description]
     * relationship one to many with School model
     * @return [type] [description]
     */
    public function school()
    {
        return $this->belongsTo('App\School');
    }

    /**
     * [courses description]
     * relationship one to many with Course model
     * @return [type] [description]
     */
    public function courses()
    {
        return $this->hasMany('App\Course');
    }
}
