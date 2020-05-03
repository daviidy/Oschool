<?php

namespace App\Http\Controllers;

use App\Payments;
use App\School;
use Illuminate\Http\Request;

class PaymentsController extends Controller
{
    /**
     * Display all means of payments
     */

     public function payments(School $school)
     {
         return view('admin_views.payments.all_payments', ['school' => $school]);
     }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school)
    {

        $cinet_pay = Payments::where('type','mobile_money')->exists();
        return view('admin_views.payments.index', ['school' => $school,'cinet_pay'=>$cinet_pay]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school)
    {
        return view('admin_views.payments.create', ['school' => $school]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,School $school)
    {
        $statut_payments = Payments::where('type',$request['type'])->exists();

        if($statut_payments)
        {
            return back()->with('status_error', 'Paramètre mobile money dejà ajouté');
        }
        else{
            $payments = Payments::create($request->all());
            return redirect('/schoolAdmin/'.$payments->school_id.'/moyens_paiments/mobile_money')->with('status', 'Nouveau paramètre enregistré');
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function show(Payments $payments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school,$payments)
    {
        // dd($payments);
        $payment = Payments::where('id',$payments)->first();
        // dd($payment);

        return view('admin_views.payments.edit', ['school' => $school, 'payment'=>$payment]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$school,$payments)
    {
        // dd($school, $payments);
        $payments = Payments::where('id',$payments)->first();
        $payments->update($request->all());

        return redirect('/schoolAdmin/'.$school.'/moyens_paiments/mobile_money')->with('status', 'Mobile Money modifié avec succès');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Payments  $payments
     * @return \Illuminate\Http\Response
     */
    public function destroy($payments)
    {
        $payments = Payments::where('id',$payments)->first();
        $payments->delete();
        return redirect()->back()->with('status', 'Mobile money supprimée de la base de données');
    }
}
