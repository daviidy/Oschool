<?php

namespace App\Http\Controllers;

use App\Coupon;
use App\Course;
use App\School;
use App\Purchase;
use App\Pricing;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Exception;
use Illuminate\Support\Facades\Session;
use Auth;

class CouponController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school, Course $course)
    {
        return view('admin_views.coupons.index', ['course' => $course, 'school' => $school]);
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

        return back()->with('status', 'Nouveau coupon ajouté');
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
                if ($coupon->courses->contains($course_found->id)) {
                    continue;
                }
                else {
                    $coupon->courses()->attach($course_found);
                }

            }
        }
        // $coupon->save();
        return back()->with('status', 'Coupon modifié');
    }


    public function applyCoupon(Request $request)
    {
        $date = Carbon::now();
        $coupon = Coupon::where('code', $request->code)->where('school_id', $request->school_id)->first();
        $course = Course::find($request->course_id);
        $pricing = Pricing::find($request->pricing_id);

        //on check si il n'ya pas de code coupon
        if ($coupon === null || !$coupon->courses->contains($course->id) || Carbon::parse($coupon->date_exp) < $date) {
            return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Coupon Invalide');
        }
        else {
            $discount_value = ($pricing->price * $coupon->value)/100;
            $price = $pricing->price - $discount_value;
            if ($price == 0) {
                if (Auth::check()) {
                    $purchase=Purchase::create([
                                      'price' => 0,
                                      'date' => Carbon::now(),
                                      'user_id' => Auth::user()->id,
                                      'pricing_id' => $pricing->id,
                                      'course_id' => $pricing->course_id,
                                    ]);

                    return view('pricings.free',[
                                                 'purchase' => $purchase,
                                                 'pricing' => $pricing,
                                               ]);
                }
                else {
                    return redirect('/course/'.$course->slug.'/checkout/'.$pricing->id)->with('status', 'Connectez-vous d\'abord ci-dessous, pour ajouter le code coupon');
                }


            }

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
                              'cpm_site_id' => '113043',
                              'cpm_trans_id' => $temps,
                              'cpm_trans_date' => $time,
                              'cpm_payment_config' => 'SINGLE',
                              'cpm_page_action' => 'PAYMENT',
                              'cpm_version' => 'V1',
                              'cpm_language' => 'fr',
                              'cpm_designation' => 'Abonnement à la formation '.$pricing->course->name,
                              'apikey' => '134714631658c289ed716950.86091611',
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
                                'pricing_id' => $pricing->id,
                                'course_id' => $pricing->course_id,
                              ]);

              return view('pricings.coupon',['signature' => str_replace('"',"",$resultat),
                                           'temps' => $temps,
                                           'time' => $time,
                                           'purchase' => $purchase,
                                           'pricing' => $pricing,
                                           'price' => $price
                                         ]);

        }
        /*
        return redirect('/schoolAdmin/'.$request->school_id.'/courses/'.$request->course_id.'/curriculum');
        */
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
