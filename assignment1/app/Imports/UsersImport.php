<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;


class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        // dd($row);
        
            return new User([
                'language_id' => $row[1],
                'name'       => $row[2],
                'email'      => $row[3], 
                'phone'      => $row[4],
                'address'    => $row[5],
             ]);
       
    }
}
