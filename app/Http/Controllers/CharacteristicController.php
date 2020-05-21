<?php

namespace App\Http\Controllers;

use App\Characteristic;
use App\Offer;
use Illuminate\Http\Request;
use Auth;


class CharacteristicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $characteristics = Characteristic::orderby('id', 'asc')->paginate(30);

            return view('admins.characteristic.index', ['characteristics' => $characteristics]);
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
    public function create()
    {
        $offers = Offer::all();

        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('admins.characteristic.create',['offers' => $offers]);
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
        // dd($request['offer_id']);
        $characteristic = Characteristic::create($request->all());
        if(is_array($request->offer_id))
        {
            foreach($request->offer_id as $offer)
            {
                $offer_found = Offer::find($offer);
                $characteristic->offers()->attach($offer_found);
            }
        }

        return redirect('characteristics')->with('status', 'Nouvelle caracteristique ajouté');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function show(Characteristic $characteristic)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function edit(Characteristic $characteristic, Offer $offer)
    {

        return view('admins.characteristic.edit', ['characteristic' => $characteristic,'offer' => $offer]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Characteristic $characteristic)
    {
        $characteristic->update($request->all());
        if(is_array($request->offer_id))
        {
            foreach($request->offer_id as $offer)
            {
                $offer_found = Offer::find($offer);

                if ($characteristic->offers->contains($offer_found->id)) {
                    continue;
                }
                else {
                    $characteristic->offers()->attach($offer_found);
                }

            }
        }

        // $coupon->save();
        return redirect('characteristics')->with('status', 'Caracteristique modifié');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Characteristic  $characteristic
     * @return \Illuminate\Http\Response
     */
    public function destroy(Characteristic $characteristic)
    {
        $characteristic->delete();
        return back()->with('status', 'Caracteristique supprimé');
    }
}
