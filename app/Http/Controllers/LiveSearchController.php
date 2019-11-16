<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\School;

class LiveSearchController extends Controller
{


    function action(Request $request, School $school)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('courses')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('slug', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('courses')
         ->orderBy('name', 'asc')
         ->where('school_id', 'like', '%'.$school->id.'%')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $school = School::find($row->school_id);
        $output .= '
        <div class="tch-course-listing col-lg-4 col-md-6 col-xs-6 ui-sortable-handle clearfix">
            <a href="/schoolAdmin/'.$school->id.'/courses/'.$row->id.'/information">
                <div class="tch-course-listing-wrapper">
                    <div class="row">
                        <div class="col-lg-12">
                            <div style="background-image: url(/images/courses/logos/'.$row->logo.');background-size: 100%;" class="tch-course-listing-image"></div>
                            <div what="course name" ng-bind="::course.name" class="tch-course-listing-title">'.$row->name.'</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="tch-course-listing-sales tch-course-listing-footer-section">$<div ng-bind="(courseStats[course.id].total_sales > 0 ? (courseStats[course.id].total_sales/ 100) : 0)" what="course-total-sales"
                              class="tch-course-listing-sales-total">0</div>
                            <div class="tch-course-listing-sales-label">Ventes</div>
                        </div>
                        <div class="tch-course-listing-enrollment tch-course-listing-footer-section">
                            <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">0</div>
                            <div class="tch-course-listing-enrollment-label">Inscrit</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun cours trouvé</td>
       </tr>
       ';
      }
      $data = array(
       'table_data'  => $output,
       'total_data'  => $total_row
      );

      echo json_encode($data);
     }
    }
}
