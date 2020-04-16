<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pricing extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'type',
                           'price',
                           'recurring',
                           'per',
                           'times',
                           'course_id',
                           'description',
                           'status',
                           'password',
                         ];


     /**
      * [users description]
      * relationship one to many with Course model
      * @return [array] [description]
      */
      public function course()
      {
          return $this->belongsTo('App\Course');
      }

      /**
       * [users description]
       * relationship one to many with Purchase model
       * @return [array] [description]
       */
       public function purchases()
       {
           return $this->hasMany('App\Purchase');
       }



      public static function boot() {
      parent::boot();

      static::deleting(function($pricing) { // before delete() method call this

           $pricing->purchases()->delete();
           // do the rest of the cleanup...
      });
  }
}
