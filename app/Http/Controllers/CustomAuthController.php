<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Course;
use App\School;
use Auth;

class CustomAuthController extends Controller
{
    //
    public function addUser(Request $request)
    {
        // now we get our form data from Request
        $name = $request->name;
    	$email 		= $request->email; // request coming from ajax
    	$password 	= $request->password; // request comming from ajax
        // note Laravel uses an encryption system called bcrypt
        // this has been the secure foundation for login queries
        // so here we are to encrypt as Laravel will accept when doing Auth
        $hash_password = bcrypt($password);
    	// do other process
        $user = new User();
        $user->name    = $name;
        $user->email    = $email;
        $user->password = $hash_password;
        $user->save();
        //on inscrit user à l'ecole
        $school = School::find($request->school_id);
        $in_school = $user->schools->contains($school->id);
        if (!$in_school) {
            $user->schools()->attach($school);
        }

        if (Auth::guard('web')->attempt(['email' => $user->email, 'password' => $user->password])) {
			$msg = array(
				'status'  => 'success',
				'message' => 'Login Successful'
			);
			return response()->json($msg);
		}
    	// return a msg dumb msg with client email
    	$msg = $email." has been registered successfuly";
    	echo $msg; // or return data on json.
    }


    // do login Auth
    public function loginUser(Request $request)
    {
    	$email	       = $request->email;
    	$password      = $request->password;
    	$rememberToken = $request->remember;
    	// now we use the Auth to Authenticate the users Credentials
		// Attempt Login for members
		if (Auth::guard('web')->attempt(['email' => $email, 'password' => $password], $rememberToken)) {
			$msg = array(
				'status'  => 'success',
				'message' => 'Login Successful'
			);
			return response()->json($msg);
		} else {
			$msg = array(
				'status'  => 'error',
				'message' => 'Login Fail !'
			);
			return response()->json($msg);
		}
    }




}
