<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    /**
     * [protected description]
     * @var [array]
     */
    protected $fillable = ['date_exp',
                           'code',
                           'value',
                         ];

}
