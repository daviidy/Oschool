<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Color extends Model
{
    protected $fillable = ['navbar_footer',
                           'navbar_links',
                           'navbar_links_transparent',
                           'headings',
                           'homepage_heading_subtitle',
                           'buttons_links',
                           'course_page_heading',
                           'body_text',
                           'school_id',
                           'logo_width'
                         ];


     /**
      * [users description]
      * relationship one to one with School model
      * @return [array] [description]
      */
      public function school()
      {
          return $this->belongsTo('App\School');
      }
}
