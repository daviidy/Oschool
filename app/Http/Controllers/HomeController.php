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

    public function redirect(){
        if ($request['code']) {
            return reirect('home');
        }
        else {
            return view('home');
        }
    }





}
