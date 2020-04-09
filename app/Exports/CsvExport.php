<?php

namespace App\Exports;

use App\User;
use App\School;
use Maatwebsite\Excel\Concerns\FromCollection;


class CsvExport implements FromCollection {school}
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection(School $school)
    {
       
         	return $school->users->all('name', 'email');
      
           
    }
               
}
