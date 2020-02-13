<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    protected $fillable = ['date',
                           'link',
                           'user_id',
                           'comment',
                           'status'
                         ];

}
