<?php

namespace App\Imports;

use App\Models\Xlsx;
use Maatwebsite\Excel\Concerns\ToModel;

class XlsxsImport implements ToModel
{
    
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        
        return new Xlsx([
            'Body'     => $row[0],
            'Subject'    => $row[1],
            'Characters' => $row[2]
        ]);
    }
}
