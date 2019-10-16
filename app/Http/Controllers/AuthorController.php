<?php

namespace App\Http\Controllers;

use App\Author;
use App\School;
use App\User;
use Auth;
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
        $authors = new Author();
        // $user = Auth::user()->schools->id;
        $schools = new School();
        // $user->schools->id;
        // return $schools->id;
        // foreach($schools as $school){
        //     return $school->logo;
        // }
        
            $authors = Author::where('school_id')->orderBy('created_at', 'desc')->get();
            return view('admin_views.authors.index')->with('authors', $authors);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $authors = new Author();
        $schools = School::get();
        // $authors = Author::where('school_id', $schools->id)->orderBy('created_at', 'desc')->get();
        // foreach ($authors as $school ) {
            // return dd($schools);
            // }
        return view('admin_views.authors.create')->with('schools',$schools);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $authors = new Author();
         $authors->full_name = $request->full_name;
         $authors->bio = $request->bio;
         $authors->school_id = $request->school_id;
         $authors->save();
            return redirect('/authors');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        // $authors = new Author();
        $author = Author::find($id);
        return view('admin_views.authors.edit')->with('author',$author);
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
        return redirect('/authors');
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
        return redirect('/authors');
    }
}
