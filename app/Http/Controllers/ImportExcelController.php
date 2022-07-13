<?php

namespace App\Http\Controllers;

use App\Imports\ImportExcel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class ImportExcelController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        $path = $request->file('file');
        Excel::import(new ImportExcel, $path);
        return redirect()->back();
    }
}
