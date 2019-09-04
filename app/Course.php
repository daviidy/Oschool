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
                           'logo',
                           'category_id'
                         ];


     /**
      * [users description]
      * relationship one to many with User model
      * @return [array] [description]
      */
      public function author()
      {
          return $this->belongsTo('App\Author');
      }


      /**
       * [users description]
       * relationship one to many with Category model
       * @return [array] [description]
       */
       public function category()
       {
           return $this->belongsTo('App\Category');
       }


       /**
        * [users description]
        * relationship one to many with School model
        * @return [array] [description]
        */
        public function school()
        {
            return $this->belongsTo('App\School');
        }


        /**
         * [users description]
         * relationship one to many with Pricing model
         * @return [array] [description]
         */
         public function pricings()
         {
             return $this->hasMany('App\Pricing');
         }


         /**
          * [users description]
          * relationship one to many with Section model
          * @return [array] [description]
          */
          public function sections()
          {
              return $this->hasMany('App\Section');
          }

          /**
           * [users description]
           * relationship one to many with Lesson model
           * @return [array] [description]
           */
           public function lessons()
           {
               return $this->hasMany('App\Lesson');
           }

}
