<?php

namespace App\Http\Controllers;

use App\Models\NewInfra;
use App\Models\Traffic;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use League\CommonMark\Node\Inline\Newline;

class CloseB2SController extends Controller
{
    public function close(Request $request)
    {
        $now = Carbon::today();
        $sekarang = strtotime(today());
        $hari = strtotime("-7 days");
        $coba = strtotime(today()->subDays(7));
        $tgl = date('2022-05-26 00:00:00');
        $tgl2 = date('2022-05-28');
        $jajal_tgl = strtotime('2022-05-28');
        $tgl_exp = Carbon::parse($jajal_tgl)->subDays(7);
        $jajal = Carbon::today()->diffInDays($tgl);
        // dd($coba);

        $traffic = NewInfra::all();
        foreach ($traffic as $value) {
            // $start_rfc_b2s = gmdate('Y-m-d H:i:s', $value->sla_rfc_b2s);
            $start_rfc_b2s = date('d-m-Y', strtotime($value->sla_rfc_b2s));
            $end_rfc_b2s = Carbon::parse($start_rfc_b2s)->subDays(7);
            // $start_rfi = gmdate('Y-m-d', $value->sla_rfi);
            $start_rfi = (int)$value->sla_rfi;
            $end_rfi = Carbon::parse($start_rfi)->subDays(7);
            $start_date = Carbon::parse($sekarang)->toDateTimeString();
        }
        // $start_date_rfc = strtotime($request->start_date_rfc);
        // $end_date_rfc = strtotime($request->end_date_rfc);
        // $start_date_rfi = strtotime($request->start_date_rfi);
        // $end_date_rfi = strtotime($request->end_date_rfi);
        // dd($end_rfi);
        $close_rfc_b2s = DB::table('new_infras')->whereIn('infra_type', ['B2S', 'Mini Macro'])
            ->whereNotIN('progress_regional', ['07. RFC', '08. CME OG', '09. PLN CONNECTION', '10. RFI', '11. LV MONITORING', '12. CONNECTED', '13. ON AIR', '14. HOLD', '15. DROP', '16. RE-KOM/KKST'])
            // ->whereRaw(DB::raw("CAST(from_unixtime(sla_rfc_b2s, '%Y-%m-%d') AS DATE) >= date_format(now(), '%Y-%m-%d') AND CAST(from_unixtime(sla_rfc_b2s, '%Y-%m-%d') AS DATE) <= (date_format(now(), '%Y-%m-%d') + INTERVAL 7 DAY)"))
            ->whereRaw(DB::raw("STR_TO_DATE(sla_rfc_b2s,'%d-%m-%Y') >= date_format(now(), '%Y-%m-%d') AND STR_TO_DATE(sla_rfc_b2s,'%d-%m-%Y') <= (date_format(now(), '%Y-%m-%d') + INTERVAL 7 DAY)"))
            ->orderBy('sla_rfc_b2s', 'asc')
            ->get();
        // $count_close_b2s = Carbon::today()->diffInDays(Carbon::parse($start_rfc_b2s));
        $close_rfi = DB::table('new_infras')->whereIN('infra_type', ['B2S', 'Mini Macro'])
            ->whereNotIN('progress_regional', ['10. RFI', '11. LV MONITORING', '12. CONNECTED', '13. ON AIR', '14. HOLD', '15. DROP', '16. RE-KOM/KKST'])
            // ->whereRaw(DB::raw("CAST(from_unixtime(sla_rfi, '%Y-%m-%d') AS DATE) >= date_format(now(), '%Y-%m-%d') AND CAST(from_unixtime(sla_rfi, '%Y-%m-%d') AS DATE) <= (date_format(now(), '%Y-%m-%d') + INTERVAL 7 DAY)"))
            ->whereRaw(DB::raw("STR_TO_DATE(sla_rfi,'%d-%m-%Y') >= date_format(now(), '%Y-%m-%d') AND STR_TO_DATE(sla_rfi,'%d-%m-%Y') <= (date_format(now(), '%Y-%m-%d') + INTERVAL 7 DAY)"))
            ->orderBy('sla_rfi', 'asc')
            ->get();
        // dd($close_rfc_b2s);
        // $count_close_rfi = Carbon::today()->diffInDays(Carbon::parse($start_rfi));
        return view('AlertCenter.close', compact('close_rfc_b2s', 'close_rfi', 'now'));
    }
    public function out(Request $request)
    {
        $now = today();
        $unix = strtotime(today());
        $traffic = NewInfra::all();
        $data = [];
        foreach ($traffic as $value) {
            $data[] = date('d-m-Y', strtotime($value->sla_rfc_b2s));
            // $start_out_rfc_b2s = (int)$value->sla_rfc_b2s;
            // $start_rfi = gmdate('Y-m-d', $value->sla_rfi);
        }
        $out_rfc_b2s = NewInfra::where('infra_type', 'B2S')
            ->whereNotIN('progress_regional', ['07. RFC', '08. CME OG', '09. PLN CONNECTION', '10. RFI', '11. LV MONITORING', '12. CONNECTED', '13. ON AIR', '14. HOLD', '15. DROP', '16. RE-KOM/KKST'])
            ->whereRaw(DB::raw("STR_TO_DATE(sla_rfc_b2s,'%d-%m-%Y') < date_format(now(), '%Y-%m-%d')"))
            ->orderBy('sla_rfc_b2s', 'asc')
            ->get();
        $out_rfi = NewInfra::where('infra_type', 'B2S')
            ->whereNotIN('progress_regional', ['10. RFI', '11. LV MONITORING', '12. CONNECTED', '13. ON AIR', '14. HOLD', '15. DROP', '16. RE-KOM/KKST'])
            ->whereRaw(DB::raw("STR_TO_DATE(sla_rfi,'%d-%m-%Y') < date_format(now(), '%Y-%m-%d')"))
            ->orderBy('sla_rfi', 'asc')
            ->get();

        // dd($out_rfi);
        return view('AlertCenter.out', compact('out_rfc_b2s',  'out_rfi', 'now',));
    }
}
