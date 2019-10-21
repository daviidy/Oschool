<?php

namespace App\Http\Controllers;

use App\Coupon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $coupons = Coupon::all();
      return view('coupons.coupon',compact('coupons',$coupons));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('coupons.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate
        $request->validate([
          'code'=>'required',
          'value'=>'required',
          'expiration_date'=>'required',
        ]);

        $coupon = Coupon::create(['code'=> $request->code,'value' => $request->value,'expiration_date' => $request->expiration_date]);
        return redirect('/coupons/'.$coupon->id);
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
        return view('coupons.show',compact('coupon',$coupon));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function edit(Coupon $coupon)
    {
        //
        return view('coupons.edit',compact('coupon',$coupon));
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
        //
        $request->validate([
            'code' => 'required',
            'value' => 'required',
            'expiration_date'=>'required',
        ]);

        $coupon->code = $request->code;
        $coupon->value = $request->value;
        $coupon->expiration_date = $request->expiration_date;
        $coupon->save();
        $request->session()->flash('status', 'Coupon modifié avec succes!');
        return redirect('coupons');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Coupon  $coupon
     * @return \Illuminate\Http\Response
     */
    public function destroy(Coupon $coupon)
    {
        //
        $coupon->delete();
        $request->session()->flash('status', 'Coupon supprimé avec succes!');
        return redirect('coupons');
    }
}
