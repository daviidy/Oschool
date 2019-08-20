<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['name',
                           'subtitle',
                           'slug',
                           'description',
                           'video',
                           'user_id',
                           'school_id',
                           'author_id',
                           'image'
                         ];


     /**
      * [users description]
      * relationship many to many with User model
      * @return [array] [description]
      */
      public function teacher()
      {
          return $this->belongsTo('App\Author');
      }


      /**
       * [users description]
       * relationship many to many with Category model
       * @return [array] [description]
       */
       public function categories()
       {
           return $this->belongsToMany('App\Category');
       }


       /**
        * [users description]
        * relationship many to many with School model
        * @return [array] [description]
        */
        public function school()
        {
            return $this->belongsTo('App\School');
        }


        /**
         * [users description]
         * relationship many to many with Pricing model
         * @return [array] [description]
         */
         public function pricings()
         {
             return $this->belongsToMany('App\Pricing');
         }

}
