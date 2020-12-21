<?php

namespace App\Http\Controllers;

use App\Category;
use Auth;
use App\School;
use Image;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            $categories = Category::orderby('id', 'asc')->paginate(30);
            return view('admins.categories.index', ['categories' => $categories]);
        }
        else {
            return redirect('home');
        }

    }

    public function indexBy($school_id, $category_id)
    {
        $school = School::find($school_id);
        $category = Category::find($category_id);
        return view('categories.index', ['category' => $category, 'school' => $school]);

    }


    //index pour la vue des categories specifiques a chaque ecole
    public function indexSchoolCategorie(School $school)
    {

        $school_categorie = Category::where('school_id',$school->id)->get();

        return view('admin_views.school_category.index',compact('school','school_categorie'));
    }

    // //Pour la vue de creation des categories specifique a chaque ecole
    public function createSchoolCategorie(School $school)
    {

        return view('admin_views.school_category.create', ['school' => $school]);
    }

    // //Pour la vue de modification des categories specifique a chaque ecole
    public function editSchoolCategorie(School $school,Category $category)
    {
        $school_category = Category::where('id',$category->id)->first();
        // dd($school_categorie);
        return view('admin_views.school_category.edit', ['school' => $school, 'school_category'=>$school_category]);

    }

    // //Pour la mise a jour des categories specifique a chaque ecole
    public function updateSchoolCategorie(Request $request,School $school,Category $category)
    {
        if($request->hasFile('image')){
          $image = $request->file('image');
          if ($category->image !== 'image.jpg' && File::exists(public_path('/images/categories/' . $category->image))) {
              File::delete(public_path('/images/categories/' . $category->image));
          }
        }

        $category->update($request->all());

        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/categories/' . $filename));
          $category->image = $filename;
          $category->save();
        }
        return redirect()->route('school_category.index',$request->school_id)->with('status', 'Catégorie mis à jour');

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('admins.categories.create');
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
        $category = Category::create($request->all());
        if($request->hasFile('image')){
          $image = $request->file('image');
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/categories/' . $filename));
          $category->image = $filename;
          $category->save();
        }
        return redirect()->route('school_category.index',$request->school_id)->with('status', 'Catégorie ajoutée');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        if (Auth::check() && Auth::user()->isAdmin()) {
            return view('admins.categories.edit', ['category' => $category]);
        }
        else {
            return redirect('home');
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {
        $category->update($request->all());
        if($request->hasFile('image')){
          $image = $request->file('image');
          if ($category->image !== 'image.jpg' && File::exists(public_path('/images/categories/' . $category->image))) {
              File::delete(public_path('/images/categories/' . $category->image));
          }
          $filename = time() . '.' . $image->getClientOriginalExtension();
          Image::make($image)->save(public_path('/images/categories/' . $filename));
          $category->image = $filename;
          $category->save();
        }
        return redirect('categories')->with('status', 'Catégorie modifiée');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->back()->with('status', 'Catégorie supprimée de la base de données');
    }
}
