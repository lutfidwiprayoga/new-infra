<?php

namespace App\Http\Controllers;

use App\Models\Traffic;
use Illuminate\Http\Request;

class FilterController extends Controller
{
    public function data(Request $request)
    {
        $batch = $request->batch;
        $tower_provider = $request->tower_provider;
        $infra_type = $request->infra_type;
        $progress_regional = $request->progress_regional;
        $progress_hq = $request->progress_hq;
        $simple_progress = $request->simple_progress;
        $target_rfi_week = $request->target_rfi_week;
        $target_oa_week = $request->target_oa_week;
        $trm_type = $request->trm_type;
        // mengambil data dari table pegawai sesuai pencarian data
        $traffic = Traffic::where('batch', 'like', "%" . $batch . "%")->get();
        $traffic = Traffic::where('tower_provider', 'like', "%" . $tower_provider . "%")->get();
        $traffic = Traffic::where('infra_type', 'like', "%" . $infra_type . "%")->get();
        $traffic = Traffic::where('progress_regional', 'like', "%" . $progress_regional . "%")->get();
        $traffic = Traffic::where('progress_hq', 'like', "%" . $progress_hq . "%")->get();
        $traffic = Traffic::where('simple_progress', 'like', "%" . $simple_progress . "%")->get();
        $traffic = Traffic::where('target_rfi_week', 'like', "%" . $target_rfi_week . "%")->get();
        $traffic = Traffic::where('target_oa_week', 'like', "%" . $target_oa_week . "%")->get();
        $traffic = Traffic::where('trm_type', 'like', "%" . $trm_type . "%")->get();
        // if ($id == 0) {
        // $data = Traffic::get();
        // } else {
        // $data = Traffic::where('id', $id)->get();
        // }
        return $traffic;
    }
}
