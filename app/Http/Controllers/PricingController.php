<?php

namespace App\Http\Controllers;

use App\Pricing;
use App\School;
use App\Course;
use Auth;
use Illuminate\Http\Request;

class PricingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createFreePlan(School $school, Course $course)
    {
        return view('admin_views.pricings.createFreePlan', ['school' => $school, 'course' => $course]);
    }

    public function editFreePlan(School $school, Course $course, Pricing $pricing)
    {
        return view('admin_views.pricings.editFreePlan', ['school' => $school, 'course' => $course, 'pricing' => $pricing]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createSubscriptionPlan(School $school, Course $course)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.createSubscriptionPlan', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
    }

    public function editSubscriptionPlan(School $school, Course $course, Pricing $pricing)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.editSubscriptionPlan', ['school' => $school, 'course' => $course, 'pricing' => $pricing]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createOnePurchasePlan(School $school, Course $course)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.createOnePurchasePlan', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
    }

    public function editOnePurchasePlan(School $school, Course $course, Pricing $pricing)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.editOnePurchasePlan', ['school' => $school, 'course' => $course, 'pricing' => $pricing]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function createPaymentPlan(School $school, Course $course)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.createPaymentPlan', ['school' => $school, 'course' => $course]);
        }
        else {
            return redirect('home');
        }
    }

    public function editPaymentPlan(School $school, Course $course, Pricing $pricing)
    {
        if (Auth::check()) {
        return view('admin_views.pricings.editPaymentPlan', ['school' => $school, 'course' => $course, 'pricing' => $pricing]);
        }
        else {
            return redirect('home');
        }
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pricing = Pricing::create($request->all());
        return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$request->course_id.'/pricing')->with('status', 'L\'offre de prix a bien été ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function show(Pricing $pricing)
    {
        return view('pricings.show', ['pricing' => $pricing]);
    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function edit(Pricing $pricing)
    {
        if ($pricing->type == 'Free') {
            return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$pricing->course_id.'/pricing/'.$pricing->id.'/editFreePlan');
        }
        elseif ($pricing->type == 'Abonnement') {
            return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$pricing->course_id.'/pricing/'.$pricing->id.'/editSubscriptionPlan');
        }
        elseif ($pricing->type == 'Paiement en une fois') {
            return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$pricing->course_id.'/pricing/'.$pricing->id.'/editOnePurchasePlan');
        }
        elseif ($pricing->type == 'Plan de paiement') {
            return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$pricing->course_id.'/pricing/'.$pricing->id.'/editPaymentPlan');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pricing $pricing)
    {
        $pricing->update($request->all());
        return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$request->course_id.'/pricing')->with('status', 'L\'offre de prix a bien été modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Pricing  $pricing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pricing $pricing)
    {
        $pricing->delete();
        return redirect('/schoolAdmin/'.$pricing->course->school_id.'/courses/'.$request->course_id.'/pricing')->with('status', 'Offre de prix supprimée de la base de données' );
    }
}
