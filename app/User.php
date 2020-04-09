<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Contracts\Auth\CanResetPassword;
use Illuminate\Support\Facades\File;

use App\Notifications\PasswordReset;

class User extends Authenticatable implements MustVerifyEmail
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
        'name',
        'email',
        'password',
        'email_verified_at',
        'type1',
        'type2',
        'type3',
        'telephone',
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

    public function sendPasswordResetNotification($token)
    {
        $this->notify(new PasswordReset($token));
    }
    //function for relationship between
    //user and tasks (many to many)
    public function tasks()
    {
        return $this->belongsToMany('App\Task');
    }


     //function for relationship between
    //user and deliverables (one to many)
    public function deliverables()
    {
        return $this->hasMany('App\Deliverable');
    }


    public function routeNotificationForMail($notification)
    {
        return $this->email;
    }

    //function for relationship between
    //user and session (many to many)

    public function classrooms()
    {
        return $this->belongsToMany('App\Classroom');
    }

    public function classroomsTeacher()
      {
          return $this->hasMany('App\Classroom');
      }

    public function csv_file()
          {
              return $this->hasMany('App\CsvFile');
          }

    public static function boot() {
    parent::boot();

    static::deleting(function($user) { // before delete() method call this

        if (File::exists(public_path('/images/users/default/' . $user->image))) {
            File::delete(public_path('/images/users/default/' . $user->image));
        }
         $user->certificates()->delete();
         $user->deliverables()->delete();
         $user->purchases()->delete();
         $user->results()->delete();
         $user->answers()->delete();
         foreach ($user->createSchools as $school) {
             $school->authors()->delete();
             $school->delete();
         }

         // do the rest of the cleanup...
    });
}






}
