<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\School;
use App\User;
use App\Author;

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
           if ($row->school_id == $school->id) {
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
                               <div class="tch-course-listing-sales tch-course-listing-footer-section">0 <div ng-bind="(courseStats[course.id].total_sales > 0 ? (courseStats[course.id].total_sales/ 100) : 0)" what="course-total-sales"
                                     class="tch-course-listing-sales-total">FCFA</div>
                                   <div class="tch-course-listing-sales-label">Ventes</div>
                               </div>
                               <div class="tch-course-listing-enrollment tch-course-listing-footer-section">
                                   <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">0</div>
                                   <div class="tch-course-listing-enrollment-label">Inscrit(e)(s)</div>
                               </div>
                           </div>
                       </div>
                   </a>
               </div>
               ';
           }

           else
           {
            $output = '
            <tr>
             <td align="center" colspan="5">Aucun cours trouvé</td>
            </tr>
            ';
           }

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





    function searchUsersAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('users')
         ->where('name', 'like', '%'.$query.'%')
         ->orWhere('email', 'like', '%'.$query.'%')
         ->orWhere('type1', 'like', '%'.$query.'%')
         ->orWhere('type2', 'like', '%'.$query.'%')
         ->orWhere('type3', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('users')
         ->orderBy('name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $token = csrf_token();
        $output .= '
        <tr>
         <td><a target="__blank" href="/users/'.$row->id.'">'.$row->name.'</a></td>
         <td>'.$row->email.'</td>
         <td>
             <form action="/users/'.$row->id.'" method="post">
                 <input type="hidden" name="_token" value="'.$token.'">
                 <input type="hidden" name="_method" value="delete">
                 <button style="background:#dc4f2f;"
                     class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                 </button>
             </form>
         </td>

        </tr>
        ';
       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun résultat pour cette recherche</td>
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



    function searchCoursesAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('courses')
         ->where('name', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('courses')
         ->orderBy('name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $token = csrf_token();
        $author = Author::find($row->author_id);
        if ($author) {
            $output .= '
            <tr>
             <td><a target="__blank" href="/schoolAdmin/'.$row->school_id.'/courses/'.$row->id.'/information">'.$row->name.'</a></td>
             <td>'.$author->full_name.'</td>
             <td>'.$row->state.'</td>
             <td>'.$row->type.'</td>
             <td>
                 <form action="/courses/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
             </td>
            </tr>
            ';
        }
        else {
            $output .= '
            <tr>
             <td><a target="__blank" href="/schoolAdmin/'.$row->school_id.'/courses/'.$row->id.'/information">'.$row->name.'</a></td>
             <td>Aucun auteur</td>
             <td>'.$row->state.'</td>
             <td>'.$row->type.'</td>
            </tr>
            ';
        }

       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun résultat pour cette recherche</td>
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



    function searchSchoolsAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('schools')
         ->where('name', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('schools')
         ->orderBy('name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
        $token = csrf_token();
        $user = User::find($row->user_id);
        $school = School::find($row->id);
        $nombre_cours = count($school->courses->where("type", "course"));
        $nombre_parcours = count($school->courses->where("type", "path"));

        if ($user) {
            $output .= '
            <tr>
             <td><a target="__blank" href="/schoolAdmin/'.$row->id.'">'.$row->name.'</a></td>
             <td><a href="/users/'.$user->id.'">'.$user->name.'</a></td>
             <td>'.$row->state.'</td>
             <td>'.$nombre_cours.'</td>
             <td>'.$nombre_parcours.'</td>
             <td>
                 <form action="/schools/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
             </td>
            </tr>
            ';
        }
        else {
            $output .= '
            <tr>
             <td><a target="__blank" href="/schoolAdmin/'.$row->id.'">'.$row->name.'</a></td>
             <td>Aucun propriétaire</td>
             <td>'.$row->state.'</td>
             <td>'.$nombre_cours.'</td>
             <td>'.$nombre_parcours.'</td>
             <td>
                 <form action="/schools/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
             </td>
            </tr>
            ';
        }

       }
      }
      else
      {
       $output = '
       <tr>
        <td align="center" colspan="5">Aucun résultat pour cette recherche</td>
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
