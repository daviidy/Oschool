<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\School;
use Mail;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
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
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'school' => ['required', 'string'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'type1' => User::DEFAULT_TYPE,
            'type2' => 'none',
            'type3' => 'none',
        ]);
        //inscription de user à l'école
        if (!empty($data["school"]) && $data['school'] !== 'none') {
            $school = School::find($data["school"]);
            $in_school = $user->schools->contains($school->id);
            if (!$in_school) {
                $user->schools()->attach($school);
            }
        }


        //envoi mail inscrit (mail bienvenue)
        Mail::send('mails.users.welcome', ['user' => $user], function($message) use ($user){
          $message->to($user->email, 'Je vous souhaite personnellement la bienvenue !')->subject('Propulsez votre vie avec Oschool');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        //envoi mail admin (mail bienvenue)
        Mail::send('mails.admins.users.registration', ['user' => $user], function($message) use ($user){
          $message->to('yaodavidarmel@gmail.com', 'A David')->subject('Il y a un nouvel utilisateur sur Oschool !');
          $message->from('eventsoschool@gmail.com', 'Oschool');
        });

        return $user;
    }
}
