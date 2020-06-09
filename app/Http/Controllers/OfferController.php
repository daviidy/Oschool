<?php

namespace App\Http\Controllers;

use App\Offer;
use Auth;
use App\Purchase;
use App\School;
use App\User;
use App\Course;
use App\Payments;
use App\Pricing;
use Illuminate\Http\Request;
use Mail;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;

class OfferController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $offers = Offer::orderby('id', 'asc')->paginate(30);
            return view('admins.offer.index', ['offers' => $offers]);
        }
        else {
            return redirect('home');
        }
    }

    public function corporate()
    {
        $offers = Offer::orderby('id', 'asc')->paginate(30);
        return view('corporate', ['offers' => $offers]);
    }


    public function checkoutPartners(Offer $offer)
    {
        //si user est connecté on fait l'api call
        //vers cinetpay pour récuperer la signature
        //et le transid

        //Recuperation des paramètres mobile money de l'ecole
        $param_mobile_money = Payments::where('site_id','113043')->first();
        // dd($param_mobile_money);

        if (Auth::check()) {



            //si l'offre est gratuite, alors
            //on redirige user vers
            //la vue free
            if ($offer->price == 0) {
                $purchase=Purchase::create([
                                  'price' => $offer->price,
                                  'date' => Carbon::now(),
                                  'user_id' => Auth::user()->id,
                                  'offer_id' => $offer->id,
                                ]);

                return view('offers.free',[
                                             'purchase' => $purchase,
                                             'offer' => $offer,
                                           ]);
            }

            $price = $offer->price;

            function postData($params, $url)
                {
                 try {
                 $curl = curl_init();
                 $postfield = '';
                 foreach ($params as $index => $value) {
                 $postfield .= $index . '=' . $value . "&";
                 }
                 $postfield = substr($postfield, 0, -1);
                 curl_setopt_array($curl, array(
                 CURLOPT_URL => $url,
                 CURLOPT_RETURNTRANSFER => true,
                 CURLOPT_ENCODING => "",
                 CURLOPT_MAXREDIRS => 10,
                 CURLOPT_TIMEOUT => 45,
                 CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                 CURLOPT_CUSTOMREQUEST => "POST",
                 CURLOPT_POSTFIELDS => $postfield,
                 CURLOPT_SSL_VERIFYPEER => false,
                 CURLOPT_HTTPHEADER => array(
                 "cache-control: no-cache",
                 "content-type: application/x-www-form-urlencoded",
                 ),
                 ));
                 $response = curl_exec($curl);
                 $err = curl_error($curl);
                 curl_close($curl);
                 if ($err) {
                 throw new Exception("cURL Error #:" . $err);
                 return $err;
                 } else {
                 return $response;
                 }
                 } catch (Exception $e) {
                 throw new Exception($e);
                 }
                }
                $time = Carbon::now();
                $temps = date("YmdHis");
              $params = array('cpm_amount' => $price,
                              'cpm_currency' => 'CFA',
                              'cpm_site_id' => $param_mobile_money->site_id,
                              'cpm_trans_id' => $temps,
                              'cpm_trans_date' => $time,
                              'cpm_payment_config' => 'SINGLE',
                              'cpm_page_action' => 'PAYMENT',
                              'cpm_version' => 'V1',
                              'cpm_language' => 'fr',
                              'cpm_designation' => 'Abonnement à l\'offre '.$offer->name,
                              'apikey' => $param_mobile_money->api_key,
                              );
              $url = "https://api.cinetpay.com/v1/?method=getSignatureByPost";
              //Appel de fonction postData()
              $resultat = postData($params, $url) ;
              $signature = json_decode($resultat, true);


              /*
              Session::put('trans_id', $temps);

              */
              Session::put('signature', str_replace('"',"",$resultat));

              //on crée l'achat qui aura un status en cours par défaut
              $purchase=Purchase::create([
                                'price' => $price,
                                'trans_id' => $temps,
                                'signature' => str_replace('"',"",$resultat),
                                'date' => Carbon::now(),
                                'user_id' => Auth::user()->id,
                                'offer_id' => $offer->id,
                              ]);

              return view('offers.show',['signature' => str_replace('"',"",$resultat),
                                           'temps' => $temps,
                                           'time' => $time,
                                           'purchase' => $purchase,
                                           'offer' => $offer,
                                           'param_mobile_money'=>$param_mobile_money
                                         ]);
        }

        //si user est pas connecté on redirige directement
        //vers la page de pricings show

        else {
            //return view('pricings.show',['pricing' => $pricing,'param_mobile_money'=>$param_mobile_money]);
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
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('admins.offer.create');
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
        $offers = Offer::create($request->all());
        return redirect('offers')->with('status', 'Offre ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function show(Offer $offer)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function edit(Offer $offer)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('admins.offer.edit', ['offer' => $offer]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Offer $offer)
    {
        $offer->update($request->all());
        return redirect('offers')->with('status', 'Offre modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Offer  $offer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Offer $offer)
    {
        $offer->delete();
        return redirect()->back()->with('status', 'Offre supprimé de la base de données');
    }
}
