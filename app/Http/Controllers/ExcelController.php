<?php

namespace App\Http\Controllers;

use App\Exports\TrafficExcel;
use App\Imports\ImportExcel;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use RealRashid\SweetAlert\Facades\Alert;

class ExcelController extends Controller
{
    public function import(Request $request)
    {
        $request->validate([
            'file' => 'required|max:10000|mimes:xlsx,xls',
        ]);
        $path = $request->file('file');
        Excel::import(new ImportExcel, $path);
        Alert::success('Success Import Data');
        return redirect()->back();
    }

    public function export()
    {
        return Excel::download(new TrafficExcel, 'tracking_new_infra_traffic.xlsx');
    }
}
