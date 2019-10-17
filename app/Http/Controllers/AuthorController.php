<?php

namespace App\Http\Controllers;

use App\Author;
use App\School;
use App\User;
use Auth;
use Redirect;
use Illuminate\Http\Request;

class AuthorController extends Controller
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
    public function create(School $school)
    {   
        $authors = new Author();

        return view('admin_views.authors.create', ['school' => $school,'authors' => $authors]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, School $school)
    {
         $authors = new Author();
         $authors->full_name = $request->full_name;
         $authors->bio = $request->bio;
         $authors->school_id = $request->school_id;
         $authors->save();

         $urrl = $school->id;
            return redirect()->back()->with('status', 'Nouveau auteur ajouter');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author, School $school)
    {
        $authors = new Author();
        
        $authors = Author::where('school_id', $school->id)->orderBy('created_at', 'desc')->get();
        return view('admin_views.authors.show', ['school' => $school, 'authors' => $authors]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school,  $id)
    {
        // $authors = new Author();
        $author = Author::find($id);
        return view('admin_views.authors.edit', ['school' => $school])->with('author', $author);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $author = Author::find($id);
        $author->full_name = $request->full_name;
        $author->bio = $request->bio;
        $author->save();
        return redirect()->back()->with('status', 'Auteur modifier');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $author = Author::find($id)->delete();
        return redirect()->back()->with('status', 'Auteur supprimer');
    }
}
