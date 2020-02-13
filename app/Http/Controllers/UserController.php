<?php

namespace App\Http\Controllers;

use App\User;
use App\School;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Auth;
use Image;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school)
    {
        $users = User::orderby('id','asc')->paginate(50);
        return view('admin_views.schools.users', ['school' => $school]);
    }

    public function students(School $school)
    {
        $users = User::where('type1', 'default')->orderby('id','asc')->paginate(50);
        return view('admin_views.schools.students', ['school' => $school]);
    }

    public function owners(School $school)
    {
        $users = User::where('type3', 'owner')->orderby('id','asc')->paginate(50);
        return view('admin_views.schools.owners', ['school' => $school]);
    }

    public function authors(School $school)
    {
        return view('admin_views.schools.authors', ['school' => $school]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('users.show', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        if (Auth::check()) {
            return view('users.settings');
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        if ($request->role) {
            if ($request->role == 'admin') {
                $user->type1 = $request->role;
                $user->save();
            }
            elseif ($request->role == 'teacher') {
                $user->type2 = $request->role;
                $user->save();
            }
            elseif ($request->role == 'owner') {
                $user->type3 = $request->role;
                $user->save();
            }

            return redirect()->back()->with('status', 'Modifications effectuées');
        }

        $user->update($request->all());

        if ($request->full) {
            $user->telephone = $request->full;
            $user->save();
        }

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/users/default/' . $filename));
          $user->image = $filename;
          $user->save();
        }

        return redirect()->back()->with('status', 'Modifications effectuées');
    }



    public function deleteRole(Request $request)
    {
        $user = User::find($request->user_id);
        if ($request->role) {
            if ($request->role == 'admin') {
                $user->type1 = 'default';
                $user->save();
            }
            elseif ($request->role == 'teacher') {
                $user->type2 = 'none';
                $user->save();
            }
            elseif ($request->role == 'owner') {
                $user->type3 = 'none';
                $user->save();
            }

            return redirect()->back()->with('status', 'Modifications effectuées');
        }

    }


    /**
     * Show the billings page.
     *
     */
    public function billings()
    {
        if (Auth::check()) {
            return view('users.billings');
        }
        else {
            return redirect('home');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        //return redirect('/user/admin')->with('status', 'Utilisateur définitivement supprimé');
        return redirect()->back()->with('status', 'Utilisateur définitivement supprimé');
    }



    public function changePassword()
    {
        // if()
        return view('users.changePassword');
    }

    public function admin_credential_rules(array $data)
    {
    $messages = [
        'current_password.required' => 'Please enter current password',
        'password.required' => 'Please enter password',
    ];

    $validator = Validator::make($data, [
        'current_password' => 'required',
        'password' => 'required|same:password',
        'password_confirmation' => 'required|same:password',
    ], $messages);

    return $validator;
    }

    public function editPassword(Request $request)
    {
            if(Auth::Check())
        {
            $request_data = $request->All();
            $validator = $this->admin_credential_rules($request_data);
            if($validator->fails())
            {
            return redirect()->back()->with('error', 'Le mot de passe de confirmation est incorrect');
            }
            else
            {
            $current_password = Auth::User()->password;
            if(Hash::check($request_data['current_password'], $current_password))
            {
                $user_id = Auth::User()->id;
                $obj_user = User::find($user_id);
                $obj_user->password = Hash::make($request_data['password']);;
                $obj_user->save();
                return redirect()->back()->with('status', 'La modification de votre mot de passe a effectuées');
            }
            else
            {
                $error = array('current_password' => 'Veuillez entrer le mot de passe actuel correct');
                return redirect()->back()->with('error_current', 'Veuillez entrer le mot de passe actuel correct');
            }
            }
        }
        else
        {
            return redirect()->to('/');
        }
    }
}
