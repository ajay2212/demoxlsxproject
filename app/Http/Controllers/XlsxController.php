<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\XlsxsImport;
use App\Exports\XlsxsExport;
use Illuminate\Support\Facades\DB;

class XlsxController extends Controller
{
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImportExport()
    {
        $data = DB::table('xlsxes')->get()->all();
        return view('file-import',compact('data'));
    }

    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileImport(Request $request)
    {
        Excel::import(new XlsxsImport, $request->file('file')->store('temp'));
        $data = DB::table('xlsxes')->get()->all();
        return view('file-import',compact('data'));
    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function fileExport()
    {
        return Excel::download(new XlsxsExport, 'data-collection.xlsx');
    }
}
