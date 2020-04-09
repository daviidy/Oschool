<?php

namespace App\Http\Controllers;

use App\CsvFile;
use App\User;
use App\Author;
use App\School;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\CsvImport;
use App\Exports\CsvExport;
use Illuminate\Http\Request;

class CsvFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$data = User::latest()->paginate(10);
        return view('csv_file_pagination', compact('data'))->with('i', (request()->input('page', 1) - 1) * 10);*/
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function csv_export(School $school)
    {   
         
        return Excel::download(new CsvExport($school), 'Utilisateur.csv');


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function csv_import()
    {
        Excel::import(new CsvImport, request()->file('file'));
        return back();
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
        /*$csvFile = CsvFile::create($request->all());
         if(is_array($request->users))
         {
             foreach($request->users as $user_id)
             {
                 //on vérifie s'il s'agit d'une école
                 $school = School::where('name', $user_id)->first();
                 //si c'est pas un cours, c'est un user
                 //on retrouve le user et on
                 //l'associe a la classroom
                 if ($course === null) {
                     $user = User::where('name', $user_id)->first();
                     $csvFile->users()->attach($user);
                     
                 }
                 //si c'est un cours, on recupere tous les users
                 //de ce cours et on les associe a la classroom
                 else {
                     foreach ($course->users as $user) {
                         $csvFile->users()->attach($user);
                        
                     }
                 }

             }
         }

         return back()->with('status', 'Nouvelle session programmée');*/
     }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\CsvFile  $csvFile
     * @return \Illuminate\Http\Response
     */
    public function show(CsvFile $csvFile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\CsvFile  $csvFile
     * @return \Illuminate\Http\Response
     */
    public function edit(CsvFile $csvFile)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\CsvFile  $csvFile
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CsvFile $csvFile)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\CsvFile  $csvFile
     * @return \Illuminate\Http\Response
     */
    public function destroy(CsvFile $csvFile)
    {
        //
    }
}
