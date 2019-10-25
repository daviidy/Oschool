<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certificate extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['user_id',
                           'date',
                           'course_id',
                           'number',
                         ];



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


}
