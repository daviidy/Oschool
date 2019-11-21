<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Response;
use Socialite;
use App\User;
use Auth;
use Carbon\Carbon;


class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }


    /**
     * Redirect the user to the facebook authentication page.
     *
     * @return Response
     */
    public function redirectToProvider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Obtain the user information from facebook.
     *
     * @return Response
     */
    public function handleProviderCallback()
    {
        $user = Socialite::driver('facebook')->user();

        // dd($user);
        // $user->token;

        $users = User::where(['email' => $user->getEmail()])->first();
        //create new user

        if($users){
            Auth::login($users);
            return redirect('/home');
        }else{

        $user = User::create([
            'name' => $user->getName(),
            'email' => $user->getEmail(),
            'email_verified_at' => Carbon::now(),
            // 'image' => $user->getAvatar(),
            ]);
            Auth::login($user,true);


            return redirect($this->redirectTo);
    }
}





//for gmail




public function redirectToProviderGmail()
{
    return Socialite::driver('google')->redirect();
}

/**
 * Obtain the user information from facebook.
 *
 * @return Response
 */
public function handleProviderCallbackGmail()
{
    $user = Socialite::driver('google')->user();

    // dd($user);
    // $user->token;

    $users = User::where(['email' => $user->getEmail()])->first();
    //create new user

    if($users){
        Auth::login($users);
         return redirect('/home');
    }else{

    $user = User::create([
        'name' => $user->getName(),
        'email' => $user->getEmail(),
        'email_verified_at' => Carbon::now(),
        // 'image' => $user->getAvatar(),
        ]);
        Auth::login($user,true);


        return redirect($this->redirectTo);
}
}

//for Linkedin




public function redirectToProviderLinkedin()
{
    return Socialite::driver('linkedin')->redirect();
}

/**
 * Obtain the user information from facebook.
 *
 * @return Response
 */
public function handleProviderCallbackLinkedin()
{
    $user = Socialite::driver('linkedin')->user();

    // dd($user);
    // $user->token;

    $users = User::where(['email' => $user->getEmail()])->first();
    //create new user

    if($users){
        Auth::login($users);
         return redirect('/home');
    }else{

    $user = User::create([
        'name' => $user->getName(),
        'email' => $user->getEmail(),
        'email_verified_at' => Carbon::now(),
        // 'image' => $user->getAvatar(),
        ]);
        Auth::login($user,true);


        return redirect($this->redirectTo);
}
}
//for Github




public function redirectToProviderGithub()
{
    return Socialite::driver('github')->redirect();
}

/**
 * Obtain the user information from facebook.
 *
 * @return Response
 */
public function handleProviderCallbackGithub()
{
    $user = Socialite::driver('github')->user();

    // dd($user);
    // $user->token;

    $users = User::where(['email' => $user->getEmail()])->first();
    //create new user

    if($users){
        Auth::login($users);
         return redirect('/home');
    }else{

    $user = User::create([
        'name' => $user->getName(),
        'email' => $user->getEmail(),
        'email_verified_at' => Carbon::now(),
        // 'image' => $user->getAvatar(),
        ]);
        Auth::login($user,true);


        return redirect($this->redirectTo);
}
}



}
