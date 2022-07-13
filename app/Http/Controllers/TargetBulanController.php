<?php

namespace App\Http\Controllers;

use App\Models\NewInfra;
use App\Models\Traffic;
use Illuminate\Http\Request;

class TargetBulanController extends Controller
{
    public function targetOA()
    {
        $target_oa = NewInfra::whereBetween('target_oa_date', ['01-06-2022', '30-06-2022'])->whereIN('simple_progress', ['NY RFI', 'RFI'])->get();
        // $bulan1 = strtotime('2022-06-01');
        // $bulan2 = strtotime('2022-06-30');
        // dd($bulan1, $bulan2);
        return view('Targetbulan.targetoa', compact('target_oa'));
    }
    public function targetRFI()
    {
        $target_rfi = NewInfra::whereBetween('target_rfi_date', ['01-06-2022', '30-06-2022'])->where('simple_progress', ['NY RFI'])->get();
        return view('Targetbulan.targetrfi', compact('target_rfi'));
    }
}
