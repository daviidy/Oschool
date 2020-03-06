<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\School;
use App\Course;
use App\Purchase;
use App\Category;
use Auth;

class AdminController extends Controller
{

    /**
     * show home of dashboard admin
     */
     public function admin()
     {
         if (Auth::check() && Auth::user()->isAdmin()) {

            $users = User::orderby('id', 'asc')->paginate(100);
            $current_month_users = User::whereMonth('created_at', '=', date('m'))->get();
            $current_month_purchases = Purchase::whereMonth('date', '=', date('m'))->get();
            $purchases = Purchase::orderby('id', 'asc')->paginate(100);
            $categories = Category::orderby('id', 'asc')->paginate(100);
            $courses = Course::orderby('id', 'asc')->paginate(100);
            return view('admins.dashboard', [
                'users' => $users,
                'purchases' => $purchases,
                'categories' => $purchases,
                'courses' => $courses,
                'current_month_purchases' => $current_month_purchases,
                'current_month_users' => $current_month_users,
            ]);
         }

     }


    /**
     * [public description]
     * @var [type]
     */
    public function schoolIndex()
    {
        if (Auth::check()) {
            $schools = School::orderby('id', 'asc')->paginate(20);
            return view('admins.schools.index', ['schools' => $schools]);
        }
        else {
            return redirect('home');
        }


    }


    /**
     * [public description]
     * @var [type]
     */
    public function courseIndex()
    {
        if (Auth::check()) {
            $courses = Course::orderby('id', 'asc')->paginate(20);
            return view('admins.courses.index', ['courses' => $courses]);
        }
        else {
            return redirect('home');
        }


    }



    /**
     * [public description]
     * @var [type]
     */
    public function userIndex()
    {
        if (Auth::check()) {
            $users = User::orderby('id', 'asc')->paginate(20);
            return view('admins.users.index', ['users' => $users]);
        }
        else {
            return redirect('home');
        }


    }



    /**
     * [public description]
     * @var [type]
     */
    public function paymentIndex()
    {
        if (Auth::check()) {
            $current_month_purchases = Purchase::whereMonth('date', '=', date('m'))->where('status', 'Validé')->get();
            return view('admins.payments.index', ['current_month_purchases' => $current_month_purchases]);
        }
        else {
            return redirect('home');
        }


    }


    /**
     * [monthlyPayments description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function monthlyPayments(Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les sessions du mois, de l'annee et appartenant
      //au prof
      if (Auth::check() && Auth::user()->isAdmin()) {

        $month = (int)$request['month'];
        $year = (int)$request['year'];
        //ensemble de tous les achats du mois sélectionné
        $current_month_purchases = Purchase::whereMonth('date', '=', $month)->whereYear('date', '=', $year)->where('status', 'Validé')->get();
        return view('admins.payments.index', ['current_month_purchases' => $current_month_purchases])->with('status', 'Retrouvez ci-dessous la liste des achats pour le mois sélectionné');
      }

      else {
        return redirect('home');
      }
    }

    /**
     * [monthlyPayments description]
     * @param  Request $request [description]
     * @return [type]           [description]
     */
    public function schoolmonthlyPayments( School $school, Request $request)

    {
      //on récupere le mois et l'annee choisi par le prof, et on les caste en entier
      //ensuite on selectionne toutes les sessions du mois, de l'annee et appartenant
      //au prof
      if (Auth::check()) {

        $month = (int)$request['month'];
        $year = (int)$request['year'];
        //ensemble de tous les achats du mois sélectionné
        $current_month_purchases = Purchase::whereMonth('date', '=', $month)->whereYear('date', '=', $year)->where('status', 'Validé')->get();
        return view('admin_views.schools.payments', ['current_month_purchases' => $current_month_purchases])->with('status', 'Retrouvez ci-dessous la liste des achats pour le mois sélectionné');
      }

      else {
        return redirect('home');
      }
    }





}
