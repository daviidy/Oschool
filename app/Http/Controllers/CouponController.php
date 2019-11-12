<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Course;
use App\School;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school, Course $course)
    {
        $coupons = Coupon::all();
        return view('admin_views.coupons.index', ['course' => $course, 'school' => $school, 'coupons'=>$coupons]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school, Course $course)
    {
            $allCourses = Course::all();
            return view('admin_views.coupons.create', ['school' => $school, 'allCourses' => $allCourses, 'course' => $course]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $coupon = Coupon::create($request->all());
        if(is_array($request->courses_id))
        {
            foreach($request->courses_id as $course_id)
            {
                $course_found = Course::find($course_id);
                $coupon->courses()->attach($course_found);
            }
        }

        return back()->with('status', 'Nouveau ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function show(Coupon $coupon)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit( School $school, Course $course,Coupon $coupon)
    {
        $allCourses = Course::all();
        return view('admin_views.coupons.edit', ['coupon' => $coupon,'allCourses' => $allCourses,'school' => $school, 'course' => $course]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Coupon $coupon)
    {
        $coupon->update($request->all());
        if(is_array($request->courses_id))
        {
            foreach($request->courses_id as $course_id)
            {
                $course_found = Course::find($course_id);
                // $coupon->courses()->attach($course_found);
                $coupon->courses()->sync($course_found);
            }
        }
        // $coupon->save();
        return back()->with('status', 'Coupon modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        $coupon->delete();
        return back()->with('status', 'Coupon supprimé');
    }
}
