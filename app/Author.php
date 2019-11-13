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

    public static function boot() {
    parent::boot();

    static::deleting(function($author) { // before delete() method call this

        //we delete author image
        if (File::exists(public_path('/images/authors/' . $author->image))) {
            File::delete(public_path('/images/authors/' . $author->image));
        }

         // do the rest of the cleanup...
    });
}
}
