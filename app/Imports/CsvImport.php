<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;

class CsvImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new User([
            //
            'name'      =>  $row["name"],
            'email'     =>  $row["email"],
            'password'  =>  \Hash::make($row['password']),
        ]);
    }
}
