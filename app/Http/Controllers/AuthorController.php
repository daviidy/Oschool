<?php

namespace App\Http\Controllers;

use App\Author;
use App\School;
use App\User;
use Auth;
use Redirect;
use Image;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(School $school)
     {
         $authors = Author::where('school_id', $school->id)->orderBy('created_at', 'desc')->get();
         return view('admin_views.authors.index', ['school' => $school, 'authors' => $authors]);
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(School $school)
    {
        return view('admin_views.authors.create', ['school' => $school]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $author = Author::create($request->all());
         if($request->hasFile('image')){
         $image = $request->file('image');
         $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/users/authors/' . $filename));
          $author->image = $filename;
        }

        $author->save();
            return redirect('/schoolAdmin/'.$author->school_id.'/authors')->with('status', 'Nouvel auteur ajouté');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function show(Author $author)
    {
      $school = School::find($author->school->id);
      return view('authors.show', ['author' => $author, 'school' => $school]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function edit(School $school,  Author $author)
    {
        return view('admin_views.authors.edit', ['school' => $school,'author' => $author]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Author $author)
    {
        $author->update($request->all());

        if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/users/authors/' . $filename));
          $author->image = $filename;
        }

        $author->save();
          return back()->with('status', 'Auteur modifié');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Author  $author
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, Author $author)
    {
        $author->delete();
        return redirect('/schoolAdmin/'.$author->school_id.'/authors')->with('status', 'Auteur supprimé');
    }
}
