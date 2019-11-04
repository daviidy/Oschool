<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    const ADMIN_TYPE = 'admin';
    const DEFAULT_TYPE = 'default';
    const TEACHER_TYPE = 'teacher';
    const OWNER_TYPE = 'owner';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function isAdmin()    {
        return $this->type1 === self::ADMIN_TYPE;
    }

    public function isTeacher()    {
        return $this->type2 === self::TEACHER_TYPE;
    }

    public function isOwner()    {
        return $this->type3 === self::OWNER_TYPE;
    }

    public function schools()
    {
        return $this->belongsToMany('App\School');
    }

    public function lessons()
    {
        return $this->belongsToMany('App\Lesson');
    }

    /**
     * [users description]
     * relationship many to many with Course model
     * @return [array] [description]
     */
     public function courses()
     {
         return $this->belongsToMany('App\Course');
     }

     /**
      * [users description]
      * relationship many to many with Certificate model
      * @return [array] [description]
      */
      public function certificates()
      {
          return $this->hasMany('App\Certificate');
      }

    //funciton for school owners
    public function createSchools()
    {
        return $this->hasMany('App\School');
    }


    //function for relmationship between
    //user and purchases (one to many)
    public function purchases()
    {
        return $this->hasMany('App\Purchase');
    }


    //function for relmationship between
    //user and results (one to many)
    public function results()
    {
        return $this->hasMany('App\Result');
    }


    //function for relmationship between
    //user and answers (one to many)
    public function answers()
    {
        return $this->hasMany('App\Answer');
    }


    //function for relationship between
    //user and tasks (many to many)
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }
}
