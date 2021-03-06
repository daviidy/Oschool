<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['price',
                           'date',
                           'trans_id',
                           'signature',
                           'status',
                           'user_id',
                           'pricing_id',
                           'course_id',
                           'offer_id',
                         ];


     /**
      * [users description]
      * relationship one to many with Pricing model
      * @return [array] [description]
      */
      public function pricing()
      {
          return $this->belongsTo('App\Pricing');
      }


      /**
       * [users description]
       * relationship one to many with User model
       * @return [array] [description]
       */
       public function user()
       {
           return $this->belongsTo('App\User');
       }

       /**
        * [users description]
            * relationship one to many with Course model
        * @return [array] [description]
        */
        public function course()
        {
            return $this->belongsTo('App\Course');
        }

        public function offer()
        {
            return $this->belongsTo('App\Offer');
        }
}
