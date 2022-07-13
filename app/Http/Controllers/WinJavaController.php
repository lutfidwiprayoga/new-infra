<?php

namespace App\Http\Controllers;

use App\Models\NewInfra;
use App\Models\Traffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class WinJavaController extends Controller
{
    public function index()
    {
        $traffic = NewInfra::get();
        if ($traffic) {
            $traffic_oa = NewInfra::where('progress_hq', 'ON AIR')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_rfi = NewInfra::where('progress_hq', 'RFI')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_cme = NewInfra::where('progress_hq', 'CME')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_sitac = NewInfra::where('progress_hq', 'SITAC')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_survey = NewInfra::where('progress_hq', 'SURVEY')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_drop = NewInfra::where('progress_hq', 'DROP')->where('program_hq', 'Special Program - WIN JAVA')->count();
            $traffic_total = $traffic_oa + $traffic_rfi + $traffic_cme + $traffic_sitac + $traffic_survey + $traffic_drop;
            $traffic_oa_ach = round($traffic_oa / $traffic_total * 100);
            $traffic_rfi_ach = round($traffic_rfi / $traffic_total * 100);
            $traffic_cme_ach = round($traffic_cme / $traffic_total * 100);
            $traffic_sitac_ach = round($traffic_sitac / $traffic_total * 100);
            $traffic_survey_ach = round($traffic_survey / $traffic_total * 100);
            $traffic_drop_ach = round($traffic_drop / $traffic_total * 100);
            $traffic_total_ach = round($traffic_oa_ach + $traffic_rfi_ach + $traffic_cme_ach + $traffic_sitac_ach + $traffic_survey_ach + $traffic_drop_ach);
        }

        //Tower Provider Collo TP
        if ($traffic) {
            $collo_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'ON AIR')->count();
            $collo_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'RFI')->count();
            $collo_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'CME')->count();
            $collo_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'SITAC')->count();
            $collo_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'SURVEY')->count();
            $collo_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('progress_hq', 'DROP')->count();
            $collo_grand = $collo_oa + $collo_rfi + $collo_cme + $collo_sitac + $collo_drop + $collo_survey;
        }
        //Infra Type CMI TP Collo
        if ($traffic) {
            $cmi_collo_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'ON AIR')->count();
            $cmi_collo_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'RFI')->count();
            $cmi_collo_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'CME')->count();
            $cmi_collo_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'SITAC')->count();
            $cmi_collo_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'SURVEY')->count();
            $cmi_collo_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'CMI')->where('progress_hq', 'DROP')->count();
            $cmi_collo_grand = $cmi_collo_oa + $cmi_collo_rfi + $cmi_collo_cme + $cmi_collo_sitac + $cmi_collo_drop + $cmi_collo_survey;
        }
        //Infra Type DMT TP Collo
        if ($traffic) {
            $dmt_collo_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'ON AIR')->count();
            $dmt_collo_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'RFI')->count();
            $dmt_collo_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'CME')->count();
            $dmt_collo_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'SITAC')->count();
            $dmt_collo_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'SURVEY')->count();
            $dmt_collo_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'DMT')->where('progress_hq', 'DROP')->count();
            $dmt_collo_grand = $dmt_collo_oa + $dmt_collo_rfi + $dmt_collo_cme + $dmt_collo_sitac + $dmt_collo_drop + $dmt_collo_survey;
        }
        //Infra Type PTI TP Collo
        if ($traffic) {
            $pti_collo_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'ON AIR')->count();
            $pti_collo_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'RFI')->count();
            $pti_collo_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'CME')->count();
            $pti_collo_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'SITAC')->count();
            $pti_collo_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'SURVEY')->count();
            $pti_collo_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'PTI')->where('progress_hq', 'DROP')->count();
            $pti_collo_grand = $pti_collo_oa + $pti_collo_rfi + $pti_collo_cme + $pti_collo_sitac + $pti_collo_drop + $pti_collo_survey;
        }
        //Infra Type TBG TP Collo
        if ($traffic) {
            $tbg_collo_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'ON AIR')->count();
            $tbg_collo_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'RFI')->count();
            $tbg_collo_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'CME')->count();
            $tbg_collo_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'SITAC')->count();
            $tbg_collo_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'SURVEY')->count();
            $tbg_collo_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'Collo TP')->where('tower_provider', 'TBG')->where('progress_hq', 'DROP')->count();
            $tbg_collo_grand = $tbg_collo_oa + $tbg_collo_rfi + $tbg_collo_cme + $tbg_collo_sitac + $tbg_collo_drop + $tbg_collo_survey;
        }

        //Tower Provider B2S
        if ($traffic) {
            $b2s_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'ON AIR')->count();
            $b2s_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'RFI')->count();
            $b2s_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'CME')->count();
            $b2s_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'SITAC')->count();
            $b2s_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'SURVEY')->count();
            $b2s_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('progress_hq', 'DROP')->count();
            $b2s_grand = $b2s_oa + $b2s_rfi + $b2s_cme + $b2s_sitac + $b2s_drop + $b2s_survey;
        }
        //Infra Type DMT TP B2S
        if ($traffic) {
            $dmt_b2s_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'ON AIR')->count();
            $dmt_b2s_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'RFI')->count();
            $dmt_b2s_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'CME')->count();
            $dmt_b2s_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'SITAC')->count();
            $dmt_b2s_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'SURVEY')->count();
            $dmt_b2s_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'B2S')->where('tower_provider', 'DMT')->where('progress_hq', 'DROP')->count();
            $dmt_b2s_grand = $dmt_b2s_oa + $dmt_b2s_rfi + $dmt_b2s_cme + $dmt_b2s_sitac + $dmt_b2s_survey + $dmt_b2s_drop;
        }
        //Infra Type TBG TP B2S
        if ($traffic) {
            $tbg_b2s_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'ON AIR')->count();
            $tbg_b2s_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'RFI')->count();
            $tbg_b2s_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'CME')->count();
            $tbg_b2s_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'SITAC')->count();
            $tbg_b2s_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'SURVEY')->count();
            $tbg_b2s_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('infra_type', 'b2s')->where('tower_provider', 'TBG')->where('progress_hq', 'DROP')->count();
            $tbg_b2s_grand = $tbg_b2s_oa + $tbg_b2s_rfi + $tbg_b2s_cme + $tbg_b2s_sitac + $tbg_b2s_survey + $tbg_b2s_drop;
        }
        //Total Tower Provider & Infra Type
        if ($traffic) {
            $total_tp_oa = $dmt_collo_oa + $cmi_collo_oa + $tbg_collo_oa + $pti_collo_oa + $dmt_b2s_oa + $tbg_b2s_oa;
            $total_tp_rfi = $dmt_collo_rfi + $cmi_collo_rfi + $tbg_collo_rfi + $pti_collo_rfi + $dmt_b2s_rfi + $tbg_b2s_rfi;
            $total_tp_cme = $dmt_collo_cme + $cmi_collo_rfi + $tbg_collo_cme + $pti_collo_cme + $dmt_b2s_cme + $tbg_b2s_cme;
            $total_tp_sitac = $dmt_collo_sitac + $cmi_collo_sitac + $tbg_collo_sitac + $pti_collo_sitac + $dmt_b2s_sitac + $tbg_b2s_sitac;
            $total_tp_survey = $dmt_collo_survey + $cmi_collo_survey + $tbg_collo_survey + $pti_collo_survey + $dmt_b2s_survey + $tbg_b2s_survey;
            $total_tp_drop = $dmt_collo_drop + $cmi_collo_drop + $tbg_collo_drop + $pti_collo_drop + $dmt_b2s_drop + $tbg_b2s_drop;
            $total_tp_grand = $dmt_collo_grand + $cmi_collo_grand + $tbg_collo_grand + $pti_collo_grand + $dmt_b2s_grand + $tbg_b2s_grand;
        }

        //Infra Type CMI TP Collo
        if ($traffic) {
            $cmi_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'ON AIR')->count();
            $cmi_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'RFI')->count();
            $cmi_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'CME')->count();
            $cmi_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'SITAC')->count();
            $cmi_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'SURVEY')->count();
            $cmi_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'CMI')->where('progress_hq', 'DROP')->count();
            $cmi_grand = $cmi_oa + $cmi_rfi + $cmi_cme + $cmi_sitac + $cmi_survey + $cmi_drop;
        }
        //Infra Type DMT TP Collo
        if ($traffic) {
            $dmt_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'ON AIR')->count();
            $dmt_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'RFI')->count();
            $dmt_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'CME')->count();
            $dmt_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'SITAC')->count();
            $dmt_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'SURVEY')->count();
            $dmt_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'DMT')->where('progress_hq', 'DROP')->count();
            $dmt_grand = $dmt_oa + $dmt_rfi + $dmt_cme + $dmt_sitac + $dmt_survey + $dmt_drop;
        }
        //Infra Type PTI TP Collo
        if ($traffic) {
            $pti_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'ON AIR')->count();
            $pti_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'RFI')->count();
            $pti_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'CME')->count();
            $pti_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'SITAC')->count();
            $pti_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'SURVEY')->count();
            $pti_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'PTI')->where('progress_hq', 'DROP')->count();
            $pti_grand = $pti_oa + $pti_rfi + $pti_cme + $pti_sitac + $pti_survey + $pti_drop;
        }
        //Infra Type TBG TP Collo
        if ($traffic) {
            $tbg_oa = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'ON AIR')->count();
            $tbg_rfi = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'RFI')->count();
            $tbg_cme = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'CME')->count();
            $tbg_sitac = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'SITAC')->count();
            $tbg_survey = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'SURVEY')->count();
            $tbg_drop = NewInfra::where('program_hq', 'Special Program - WIN JAVA')->where('tower_provider', 'TBG')->where('progress_hq', 'DROP')->count();
            $tbg_grand = $tbg_oa + $tbg_rfi + $tbg_cme + $tbg_sitac + $tbg_survey + $tbg_drop;
        }

        //Target OA Win Java
        $winjava_target_oa = DB::table('new_infras')
            ->where('program_hq', 'Special Program - WIN JAVA')
            ->select('target_oa_date', DB::raw('count(*) as total'))
            ->groupBy('target_oa_date')
            ->orderBy('target_oa_week', 'desc')
            ->orderBy('target_oa_week', 'asc')
            ->get();
        $winjava = [];
        $winjava_total = [];
        foreach ($winjava_target_oa as $data) {
            if ($data->target_oa_date == 'DONE') {
                $winjava[] = $data->target_oa_date;
            } elseif ($data->target_oa_date == 'DROP') {
                $winjava[] = $data->target_oa_date;
            } else {
                $winjava[] = date('d/m/Y', strtotime($data->target_oa_date));
            }
            $winjava_total[] = $data->total;
        }
        // dd($winjava_total);
        $winjava_target_oa_total = DB::table('new_infras')
            ->where('program_hq', 'Special Program - WIN JAVA')
            ->count();

        return view('WinJava.index', compact(
            'winjava',
            'winjava_total',
            'traffic',
            'traffic_oa',
            'traffic_rfi',
            'traffic_cme',
            'traffic_sitac',
            'traffic_survey',
            'traffic_total',
            'traffic_oa_ach',
            'traffic_rfi_ach',
            'traffic_cme_ach',
            'traffic_sitac_ach',
            'traffic_survey_ach',
            'traffic_drop',
            'traffic_drop_ach',
            'traffic_total_ach',
            'collo_drop',
            'cmi_collo_drop',
            'dmt_collo_drop',
            'pti_collo_drop',
            'tbg_collo_drop',
            'collo_oa',
            'collo_rfi',
            'collo_cme',
            'collo_sitac',
            'collo_survey',
            'collo_grand',
            'cmi_oa',
            'cmi_rfi',
            'cmi_cme',
            'cmi_sitac',
            'cmi_survey',
            'cmi_grand',
            'dmt_collo_oa',
            'dmt_collo_rfi',
            'dmt_collo_cme',
            'dmt_collo_sitac',
            'dmt_collo_survey',
            'dmt_collo_grand',
            'pti_oa',
            'pti_rfi',
            'pti_cme',
            'pti_sitac',
            'pti_survey',
            'pti_grand',
            'cmi_drop',
            'dmt_drop',
            'pti_drop',
            'tbg_drop',
            'tbg_collo_oa',
            'tbg_collo_rfi',
            'tbg_collo_cme',
            'tbg_collo_sitac',
            'tbg_collo_survey',
            'tbg_collo_grand',
            'cmi_collo_oa',
            'cmi_collo_rfi',
            'cmi_collo_cme',
            'cmi_collo_sitac',
            'cmi_collo_survey',
            'cmi_collo_grand',
            'pti_collo_oa',
            'pti_collo_rfi',
            'pti_collo_cme',
            'pti_collo_sitac',
            'pti_collo_survey',
            'pti_collo_grand',
            'b2s_oa',
            'b2s_rfi',
            'b2s_cme',
            'b2s_sitac',
            'b2s_survey',
            'b2s_grand',
            'dmt_b2s_oa',
            'dmt_b2s_rfi',
            'dmt_b2s_cme',
            'dmt_b2s_sitac',
            'dmt_b2s_survey',
            'dmt_b2s_grand',
            'tbg_b2s_oa',
            'tbg_b2s_rfi',
            'tbg_b2s_cme',
            'tbg_b2s_sitac',
            'tbg_b2s_survey',
            'tbg_b2s_grand',
            'b2s_drop',
            'dmt_b2s_drop',
            'tbg_b2s_drop',
            'total_tp_drop',
            'total_tp_oa',
            'total_tp_rfi',
            'total_tp_cme',
            'total_tp_sitac',
            'total_tp_survey',
            'total_tp_grand',
            'dmt_oa',
            'dmt_rfi',
            'dmt_cme',
            'dmt_sitac',
            'dmt_survey',
            'dmt_grand',
            'tbg_oa',
            'tbg_rfi',
            'tbg_cme',
            'tbg_sitac',
            'tbg_survey',
            'tbg_grand',
            'winjava_target_oa',
            'winjava_target_oa_total',
        ));
    }
}
