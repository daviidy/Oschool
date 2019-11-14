<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class School extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'heading',
                           'description',
                           'state',
                           'street',
                           'city',
                           'postal_code',
                           'country',
                           'slug',
                           'status',
                           'logo',
                           'background',
                           'overlay',
                           'user_id',
                         ];

    /**
     * [users description]
     * relationship many to many with User model
     * @return [array] [description]
     */
     public function users()
     {
         return $this->belongsToMany('App\User');
     }

     /**
      * [courses description]
      * relationship many to many with Course model
      * @return [array] [description]
      */
     public function courses()
     {
         return $this->hasMany('App\Course');
     }

     /**
      * [user description]
      * @return [type] [description]
      */
     public function user()
     {
         return $this->belongsTo('App\User');
     }

     /**
      * [authors description]
      * relationship one to many with Author model
      * @return [type] [description]
      */
     public function authors()
     {
         return $this->hasMany('App\Author');
     }


     public static function boot() {
     parent::boot();

     static::deleting(function($school) { // before delete() method call this

         if (File::exists(public_path('/images/schools/logos/' . $school->logo))) {
             File::delete(public_path('/images/schools/logos/' . $school->logo));
         }
          $school->courses()->delete();
          $school->authors()->delete();
          // do the rest of the cleanup...
     });
 }

}
