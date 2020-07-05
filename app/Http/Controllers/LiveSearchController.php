<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\School;
use App\User;
use App\Course;
use App\Author;
use App\Category;

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
       $data = Course::where('name', 'like', '%'.$query.'%')
         ->orWhere('slug', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = Course::where('school_id', 'like', '%'.$school->id.'%')
         ->orderBy('name', 'asc')
         ->get();
      }
      $total_row = $data->count();
      if($total_row > 0)
      {
       foreach($data as $row)
       {
           if ($row->school_id == $school->id) {
               $school = School::find($row->school_id);
               if (count($row->purchases) > 0 && count($row->purchases->where('status', 'Validé')) > 0) {
                   $price = 0;
                   foreach ($row->purchases->where('status', 'Validé') as $purchase) {
                       $price += $purchase->price;
                   }
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
                                   <div class="tch-course-listing-sales tch-course-listing-footer-section">'.$price.' <div ng-bind="(courseStats[course.id].total_sales > 0 ? (courseStats[course.id].total_sales/ 100) : 0)" what="course-total-sales"
                                         class="tch-course-listing-sales-total">FCFA</div>
                                       <div class="tch-course-listing-sales-label">Ventes</div>
                                   </div>
                                   <div class="tch-course-listing-enrollment tch-course-listing-footer-section">
                                       <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">'.count($row->users).'</div>
                                       <div class="tch-course-listing-enrollment-label">Inscrit(e)(s)</div>
                                   </div>
                               </div>
                           </div>
                       </a>
                   </div>
                   ';
               }
               else {
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
                                       <div ng-bind="::courseStats[course.id].enrolled" what="course-total-enrolled" class="tch-course-listing-enrollment-total">0 </div>
                                       <div class="tch-course-listing-enrollment-label">Inscrit(e)(s)</div>
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
         Type 1 ='.$row->type1.'<br/>
         Type 2 ='.$row->type2.'<br/>
         Type 3 ='.$row->type3.'<br/>
         </td>
         <td>
             <form action="/users/'.$row->id.'" method="post">
                 <input type="hidden" name="_token" value="'.$token.'">
                 <input type="hidden" name="_method" value="patch">
                 <select name="role">
                     <option value="admin" '.($row->type1 == 'admin' ? 'disabled' : '').'>Administrateur</option>
                     <option value="teacher" '.($row->type2 == 'teacher' ? 'disabled' : '').'>Professeur</option>
                     <option value="owner" '.($row->type3 == 'owner' ? 'disabled' : '').'>Propriétaire d\'école</option>
                 </select>
                 <button style="background:#4D90CC;"
                     class="btn btn-xs btn-rounded btn-primary">Ajouter le rôle</i>
                 </button>
             </form>
         </td>
         <td>
         <form action="/users/deleteRole" method="post">
             <input type="hidden" name="_token" value="'.$token.'">
             <input type="hidden" name="user_id" value="'.$row->id.'">
             <select name="role">
                 <option value="admin" '.($row->type1 == 'admin' ? '' : 'disabled').'>Administrateur</option>
                 <option value="teacher" '.($row->type2 == 'teacher' ? '' : 'disabled').'>Professeur</option>
                 <option value="owner" '.($row->type3 == 'owner' ? '' : 'disabled').'>Propriétaire d\'école</option>
             </select>
             <button style="background:#dc4f2f;"
                 class="btn btn-xs btn-rounded btn-primary">Supprimer le rôle</i>
             </button>
         </form>
         </td>
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



    function searchCategoriesAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('categories')
         ->where('name', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('categories')
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
             <td>'.$row->name.'</td>
             <td>
                 <form action="/categories/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
                 <a href="/categories/'.$row->id.'/edit">Modifier</a>
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


    function searchOffersAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('offers')
         ->where('name', 'like', '%'.$query.'%')
         ->orderBy('name', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('offers')
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
             <td>'.$row->name.'</td>
             <td>'.$row->price.'</td>
             <td>
                 <form action="/offers/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
                 <a href="/offers/'.$row->id.'/edit">Modifier</a>
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
    function getOffers($loop)
    {
        foreach($loop as $value)
        {
            return $value->name;
        }
    }
    function searchCharacteristicAdmin(Request $request)
    {
     if($request->ajax())
     {
      $output = '';
      $query = $request->get('query');
      if($query != '')
      {
       $data = DB::table('characteristics')
         ->where('description', 'like', '%'.$query.'%')
         ->orderBy('description', 'asc')
         ->get();

      }
      else
      {
       $data = DB::table('characteristics')
         ->orderBy('description', 'asc')
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
             <td>'.$row->description.'</td>
             <td>
                 <form action="/characteristics/'.$row->id.'" method="post">
                     <input type="hidden" name="_token" value="'.$token.'">
                     <input type="hidden" name="_method" value="delete">
                     <button style="background:#dc4f2f;"
                         class="btn btn-xs btn-rounded btn-danger"><i class="fa fa-trash"></i>
                     </button>
                 </form>
                 <a href="/characteristics/'.$row->id.'/edit">Modifier</a>
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





}
