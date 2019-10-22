<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\School;
use App\User;
use App\Course;
use App\Category;
use App\Purchase;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('users.dashboard');
    }


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


}
