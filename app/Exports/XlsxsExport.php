<?php

namespace App\Exports;

use App\Models\Xlsx;
use Maatwebsite\Excel\Concerns\FromCollection;

class XlsxsExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Xlsx::all();
    }
}
