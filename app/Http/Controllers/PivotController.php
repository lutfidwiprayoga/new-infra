<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\NewInfra;
use App\Models\Notifikasi;
use App\Models\Traffic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PivotController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        if (Auth::user() != null) {
            if (Auth::user()->level == 'admin') {
                $notifikasi = Notifikasi::with('newinfra')->where('read', '=', false)->latest()->get();
            }
        }
        $traffic = NewInfra::get();
        $branch = Branch::get();
        $traffic_co2021 = NewInfra::where('batch', 'CO 2021')->get();
        $traffic_kkst2022 = NewInfra::where('batch', 'KKST 2022')->get();
        $traffic_desanon3t = NewInfra::where('batch', 'DESA NON 3T')->get();
        $traffic_siterecovery = NewInfra::where('batch', 'Site Recovery')->get();
        //CO 2021
        if ($traffic_co2021) {
            $co2021_oa = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'ON AIR')->count();
            $co2021_rfi = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'RFI')->count();
            $co2021_cme = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'CME')->count();
            $co2021_rfc = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'RFC')->count();
            $co2021_sitac = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'SITAC')->count();
            $co2021_survey = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'SURVEY')->count();
            $co2021_buffer = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'DROP/HOLD - BUFFER')->count();
            $co2021_drop = NewInfra::where('batch', 'CO 2021')->where('progress_hq', 'DROP')->count();
            $co2021_total = $co2021_oa + $co2021_rfi + $co2021_cme + $co2021_rfc + $co2021_sitac + $co2021_survey + $co2021_buffer + $co2021_drop;
            $co2021_oa_ach = round($co2021_oa / $co2021_total * 100);
            $co2021_rfi_ach = round($co2021_rfi / $co2021_total * 100, 1);
            $co2021_cme_ach = round($co2021_cme / $co2021_total * 100, 1);
            $co2021_rfc_ach = round($co2021_rfc / $co2021_total * 100, 1);
            $co2021_sitac_ach = round($co2021_sitac / $co2021_total * 100, 1);
            $co2021_survey_ach = round($co2021_survey / $co2021_total * 100, 1);
            $co2021_buffer_ach = round($co2021_buffer / $co2021_total * 100, 1);
            $co2021_drop_ach = round($co2021_drop / $co2021_total * 100, 1);
            $co2021_total_ach = round($co2021_oa_ach + $co2021_rfi_ach + $co2021_cme_ach + $co2021_rfc_ach + $co2021_sitac_ach + $co2021_survey_ach + $co2021_buffer_ach + $co2021_drop_ach);
        }
        //KKST 2022
        if ($traffic_kkst2022) {
            $kkst2022_oa = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'ON AIR')->count();
            $kkst2022_rfi = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'RFI')->count();
            $kkst2022_cme = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'CME')->count();
            $kkst2022_rfc = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'RFC')->count();
            $kkst2022_sitac = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'SITAC')->count();
            $kkst2022_survey = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'SURVEY')->count();
            $kkst2022_buffer = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'DROP/HOLD - BUFFER')->count();
            $kkst2022_drop = NewInfra::where('batch', 'KKST 2022')->where('progress_hq', 'DROP')->count();
            $kkst2022_total = $kkst2022_oa + $kkst2022_rfi + $kkst2022_cme + $kkst2022_rfc + $kkst2022_sitac + $kkst2022_survey + $kkst2022_buffer + $kkst2022_drop;
            $kkst2022_oa_ach = round($kkst2022_oa / $kkst2022_total * 100, 1);
            $kkst2022_rfi_ach = round($kkst2022_rfi / $kkst2022_total * 100, 1);
            $kkst2022_cme_ach = round($kkst2022_cme / $kkst2022_total * 100, 1);
            $kkst2022_rfc_ach = round($kkst2022_rfc / $kkst2022_total * 100, 1);
            $kkst2022_sitac_ach = round($kkst2022_sitac / $kkst2022_total * 100, 1);
            $kkst2022_survey_ach = round($kkst2022_survey / $kkst2022_total * 100, 1);
            $kkst2022_buffer_ach = round($kkst2022_buffer / $kkst2022_total * 100, 1);
            $kkst2022_drop_ach = round($kkst2022_drop / $kkst2022_total * 100, 1);
            $kkst2022_total_ach = round($kkst2022_oa_ach + $kkst2022_rfi_ach + $kkst2022_cme_ach + $kkst2022_rfc_ach + $kkst2022_sitac_ach + $kkst2022_survey_ach + $kkst2022_buffer_ach + $kkst2022_drop_ach);
        }
        //Site Recovery
        if ($traffic_siterecovery) {
            $siterecovery_oa = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'ON AIR')->count();
            $siterecovery_rfi = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'RFI')->count();
            $siterecovery_cme = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'CME')->count();
            $siterecovery_rfc = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'RFC')->count();
            $siterecovery_sitac = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'SITAC')->count();
            $siterecovery_survey = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'SURVEY')->count();
            $siterecovery_buffer = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'DROP/HOLD - BUFFER')->count();
            $siterecovery_drop = NewInfra::where('batch', 'Site Recovery')->where('progress_hq', 'DROP')->count();
            $siterecovery_total = $siterecovery_oa + $siterecovery_rfi + $siterecovery_cme + $siterecovery_rfc + $siterecovery_sitac + $siterecovery_survey + $siterecovery_buffer + $siterecovery_drop;
            $siterecovery_oa_ach = round($siterecovery_oa / $siterecovery_total * 100, 1);
            $siterecovery_rfi_ach = round($siterecovery_rfi / $siterecovery_total * 100, 1);
            $siterecovery_cme_ach = round($siterecovery_cme / $siterecovery_total * 100, 1);
            $siterecovery_rfc_ach = round($siterecovery_rfc / $siterecovery_total * 100, 1);
            $siterecovery_sitac_ach = round($siterecovery_sitac / $siterecovery_total * 100, 1);
            $siterecovery_survey_ach = round($siterecovery_survey / $siterecovery_total * 100, 1);
            $siterecovery_buffer_ach = round($siterecovery_buffer / $siterecovery_total * 100, 1);
            $siterecovery_drop_ach = round($siterecovery_drop / $siterecovery_total * 100, 1);
            $siterecovery_total_ach = round($siterecovery_oa_ach + $siterecovery_rfi_ach + $siterecovery_cme_ach + $siterecovery_rfc_ach + $siterecovery_sitac_ach + $siterecovery_survey_ach + $siterecovery_buffer_ach + $siterecovery_drop_ach);
        }
        //DESA NON 3T
        /*if ($traffic_kkst2022) {
            $desanon3t_oa = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'ON AIR')->count();
            $desanon3t_rfi = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'RFI')->count();
            $desanon3t_cme = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'CME')->count();
            $desanon3t_rfc = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'RFC')->count();
            $desanon3t_sitac = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'SITAC')->count();
            $desanon3t_survey = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'SURVEY')->count();
            $desanon3t_buffer = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'DROP/HOLD - BUFFER')->count();
            $desanon3t_drop = Traffic::where('batch', 'DESA NON 3T')->where('progress_hq', 'DROP/HOLD')->count();
            $desanon3t_total = $desanon3t_oa + $desanon3t_rfi + $desanon3t_cme + $desanon3t_rfc + $desanon3t_sitac + $desanon3t_survey + $desanon3t_buffer + $desanon3t_drop;
            $desanon3t_oa_ach = round($desanon3t_oa / $desanon3t_total * 100, 1);
            $desanon3t_rfi_ach = round($desanon3t_rfi / $desanon3t_total * 100, 1);
            $desanon3t_cme_ach = round($desanon3t_cme / $desanon3t_total * 100, 1);
            $desanon3t_rfc_ach = round($desanon3t_rfc / $desanon3t_total * 100, 1);
            $desanon3t_sitac_ach = round($desanon3t_sitac / $desanon3t_total * 100, 1);
            $desanon3t_survey_ach = round($desanon3t_survey / $desanon3t_total * 100, 1);
            $desanon3t_buffer_ach = round($desanon3t_buffer / $desanon3t_total * 100, 1);
            $desanon3t_drop_ach = round($desanon3t_drop / $desanon3t_total * 100, 1);
            $desanon3t_total_ach = round($desanon3t_oa_ach + $desanon3t_rfi_ach + $desanon3t_cme_ach + $desanon3t_rfc_ach + $desanon3t_sitac_ach + $desanon3t_survey_ach + $desanon3t_buffer_ach + $desanon3t_drop_ach);
        } */
        //ALL
        if ($traffic) {
            $traffic_oa = NewInfra::where('progress_hq', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_rfi = NewInfra::where('progress_hq', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_cme = NewInfra::where('progress_hq', 'CME')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_rfc = NewInfra::where('progress_hq', 'RFC')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_sitac = NewInfra::where('progress_hq', 'SITAC')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_survey = NewInfra::where('progress_hq', 'SURVEY')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_buffer = NewInfra::where('progress_hq', 'DROP/HOLD - BUFFER')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_drop = NewInfra::where('progress_hq', 'DROP')->whereNotIn('batch', ['Site Recovery'])->count();
            $traffic_total = $traffic_oa + $traffic_rfi + $traffic_cme + $traffic_rfc + $traffic_sitac + $traffic_survey + $traffic_buffer + $traffic_drop;
            $traffic_oa_ach = round($traffic_oa / $traffic_total * 100, 1);
            $traffic_rfi_ach = round($traffic_rfi / $traffic_total * 100, 1);
            $traffic_cme_ach = round($traffic_cme / $traffic_total * 100, 1);
            $traffic_rfc_ach = round($traffic_rfc / $traffic_total * 100, 1);
            $traffic_sitac_ach = round($traffic_sitac / $traffic_total * 100, 1);
            $traffic_survey_ach = round($traffic_survey / $traffic_total * 100, 1);
            $traffic_buffer_ach = round($traffic_buffer / $traffic_total * 100, 1);
            $traffic_drop_ach = round($traffic_drop / $traffic_total * 100, 1);
            $traffic_total_ach = round($traffic_oa_ach + $traffic_rfi_ach + $traffic_cme_ach + $traffic_rfc_ach + $traffic_sitac_ach + $traffic_survey_ach + $traffic_buffer_ach + $traffic_drop_ach);
        }
        //Tower Provider Telkom Infra
        if ($traffic) {
            $telkom_infra_oa = NewInfra::where('tower_provider', 'Telkom Infra')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $telkom_infra_rfi = NewInfra::where('tower_provider', 'Telkom Infra')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $telkom_infra_ny = NewInfra::where('tower_provider', 'Telkom Infra')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $telkom_infra_drop = NewInfra::where('tower_provider', 'Telkom Infra')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $telkom_infra_grand = $telkom_infra_oa + $telkom_infra_rfi + $telkom_infra_ny + $telkom_infra_drop;
        }
        //Tower Provider DMT
        if ($traffic) {
            $dmt_oa = NewInfra::where('tower_provider', 'DMT')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $dmt_rfi = NewInfra::where('tower_provider', 'DMT')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $dmt_ny = NewInfra::where('tower_provider', 'DMT')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $dmt_drop = NewInfra::where('tower_provider', 'DMT')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $dmt_grand = $dmt_oa + $dmt_rfi + $dmt_ny + $dmt_drop;
        }
        //Tower Provider PTI
        if ($traffic) {
            $pti_oa = NewInfra::where('tower_provider', 'PTI')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $pti_rfi = NewInfra::where('tower_provider', 'PTI')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $pti_ny = NewInfra::where('tower_provider', 'PTI')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $pti_drop = NewInfra::where('tower_provider', 'PTI')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $pti_grand = $pti_oa + $pti_rfi + $pti_ny + $pti_drop;
        }
        //Tower Provider ACOM
        if ($traffic) {
            $acom_oa = NewInfra::where('tower_provider', 'ACOM')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $acom_rfi = NewInfra::where('tower_provider', 'ACOM')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $acom_ny = NewInfra::where('tower_provider', 'ACOM')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $acom_drop = NewInfra::where('tower_provider', 'ACOM')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $acom_grand = $acom_oa + $acom_rfi + $acom_ny + $acom_drop;
        }
        //Tower Provider STP
        if ($traffic) {
            $stp_oa = NewInfra::where('tower_provider', 'STP')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $stp_rfi = NewInfra::where('tower_provider', 'STP')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $stp_ny = NewInfra::where('tower_provider', 'STP')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $stp_drop = NewInfra::where('tower_provider', 'STP')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $stp_grand = $stp_oa + $stp_rfi + $stp_ny + $stp_drop;
        }
        //Tower Provider CMI
        if ($traffic) {
            $cmi_oa = NewInfra::where('tower_provider', 'CMI')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $cmi_rfi = NewInfra::where('tower_provider', 'CMI')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $cmi_ny = NewInfra::where('tower_provider', 'CMI')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $cmi_drop = NewInfra::where('tower_provider', 'CMI')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $cmi_grand = $cmi_oa + $cmi_rfi + $cmi_ny + $cmi_drop;
        }
        //Tower Provider TBG
        if ($traffic) {
            $tbg_oa = NewInfra::where('tower_provider', 'TBG')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $tbg_rfi = NewInfra::where('tower_provider', 'TBG')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $tbg_ny = NewInfra::where('tower_provider', 'TBG')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $tbg_drop = NewInfra::where('tower_provider', 'TBG')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $tbg_grand = $tbg_oa + $tbg_rfi + $tbg_ny + $tbg_drop;
        }
        //Tower Provider LSP
        if ($traffic) {
            $lsp_oa = NewInfra::where('tower_provider', 'LSP')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $lsp_rfi = NewInfra::where('tower_provider', 'LSP')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $lsp_ny = NewInfra::where('tower_provider', 'LSP')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $lsp_drop = NewInfra::where('tower_provider', 'LSP')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $lsp_grand = $lsp_oa + $lsp_rfi + $lsp_ny + $lsp_drop;
        }
        //Tower Provider GMT
        if ($traffic) {
            $gmt_oa = NewInfra::where('tower_provider', 'GMT')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $gmt_rfi = NewInfra::where('tower_provider', 'GMT')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $gmt_ny = NewInfra::where('tower_provider', 'GMT')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $gmt_drop = NewInfra::where('tower_provider', 'GMT')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $gmt_grand = $gmt_oa + $gmt_rfi + $gmt_ny + $gmt_drop;
        }
        //Tower Provider IBS
        if ($traffic) {
            $ibs_oa = NewInfra::where('tower_provider', 'IBS')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $ibs_rfi = NewInfra::where('tower_provider', 'IBS')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $ibs_ny = NewInfra::where('tower_provider', 'IBS')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $ibs_drop = NewInfra::where('tower_provider', 'IBS')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $ibs_grand = $ibs_oa + $ibs_rfi + $ibs_ny + $ibs_drop;
        }
        //Tower Provider EBT
        if ($traffic) {
            $ebt_oa = NewInfra::where('tower_provider', 'EBT')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $ebt_rfi = NewInfra::where('tower_provider', 'EBT')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $ebt_ny = NewInfra::where('tower_provider', 'EBT')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $ebt_drop = NewInfra::where('tower_provider', 'EBT')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $ebt_grand = $ebt_oa + $ebt_rfi + $ebt_ny + $ebt_drop;
        }
        //Tower Provider ABL
        if ($traffic) {
            $abl_oa = NewInfra::where('tower_provider', 'ABL')->where('simple_progress', 'ON AIR')->whereNotIn('batch', ['Site Recovery'])->count();
            $abl_rfi = NewInfra::where('tower_provider', 'ABL')->where('simple_progress', 'RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $abl_ny = NewInfra::where('tower_provider', 'ABL')->where('simple_progress', 'NY RFI')->whereNotIn('batch', ['Site Recovery'])->count();
            $abl_drop = NewInfra::where('tower_provider', 'ABL')->where('simple_progress', 'DROP/HOLD')->whereNotIn('batch', ['Site Recovery'])->count();
            $abl_grand = $abl_oa + $abl_rfi + $abl_ny + $abl_drop;
        }
        //Total Tower Provider
        if ($traffic) {
            $total_tp_oa = $telkom_infra_oa + $dmt_oa + $pti_oa + $acom_oa + $stp_oa + $cmi_oa + $tbg_oa + $lsp_oa + $gmt_oa + $ibs_oa + $ebt_oa + $abl_oa;
            $total_tp_rfi = $telkom_infra_rfi + $dmt_rfi + $pti_rfi + $acom_rfi + $stp_rfi + $cmi_rfi + $tbg_rfi + $lsp_rfi + $gmt_rfi + $ibs_rfi + $ebt_rfi + $abl_rfi;
            $total_tp_ny = $telkom_infra_ny + $dmt_ny + $pti_ny + $acom_ny + $stp_ny + $cmi_ny + $tbg_ny + $lsp_ny + $gmt_ny + $ibs_ny + $ebt_ny + $abl_ny;
            $total_tp_drop = $telkom_infra_drop + $dmt_drop + $pti_drop + $acom_drop + $stp_drop + $cmi_drop + $tbg_drop + $lsp_drop + $gmt_drop + $ibs_drop + $ebt_drop + $abl_drop;
            $total_tp_grand = $telkom_infra_grand + $dmt_grand + $pti_grand + $acom_grand + $stp_grand + $cmi_grand + $tbg_grand + $lsp_grand + $gmt_grand + $ibs_grand + $ebt_grand + $abl_grand;
        }
        return view('Pivot.index', compact(
            'co2021_oa',
            'co2021_rfi',
            'co2021_cme',
            'co2021_rfc',
            'co2021_sitac',
            'co2021_survey',
            'co2021_buffer',
            'co2021_drop',
            'co2021_total',
            'co2021_oa_ach',
            'co2021_rfi_ach',
            'co2021_cme_ach',
            'co2021_rfc_ach',
            'co2021_sitac_ach',
            'co2021_survey_ach',
            'co2021_buffer_ach',
            'co2021_drop_ach',
            'co2021_total_ach',
            'kkst2022_oa',
            'kkst2022_rfi',
            'kkst2022_cme',
            'kkst2022_rfc',
            'kkst2022_sitac',
            'kkst2022_survey',
            'kkst2022_buffer',
            'kkst2022_drop',
            'kkst2022_total',
            'kkst2022_oa_ach',
            'kkst2022_rfi_ach',
            'kkst2022_cme_ach',
            'kkst2022_rfc_ach',
            'kkst2022_sitac_ach',
            'kkst2022_survey_ach',
            'kkst2022_buffer_ach',
            'kkst2022_drop_ach',
            'kkst2022_total_ach',
            'siterecovery_oa',
            'siterecovery_rfi',
            'siterecovery_cme',
            'siterecovery_rfc',
            'siterecovery_sitac',
            'siterecovery_survey',
            'siterecovery_buffer',
            'siterecovery_drop',
            'siterecovery_total',
            'siterecovery_oa_ach',
            'siterecovery_rfi_ach',
            'siterecovery_cme_ach',
            'siterecovery_rfc_ach',
            'siterecovery_sitac_ach',
            'siterecovery_survey_ach',
            'siterecovery_buffer_ach',
            'siterecovery_drop_ach',
            'siterecovery_total_ach',
            // 'desanon3t_oa',
            // 'desanon3t_rfi',
            // 'desanon3t_cme',
            // 'desanon3t_rfc',
            // 'desanon3t_sitac',
            // 'desanon3t_survey',
            // 'desanon3t_buffer',
            // 'desanon3t_drop',
            // 'desanon3t_total',
            // 'desanon3t_oa_ach',
            // 'desanon3t_rfi_ach',
            // 'desanon3t_cme_ach',
            // 'desanon3t_rfc_ach',
            // 'desanon3t_sitac_ach',
            // 'desanon3t_survey_ach',
            // 'desanon3t_buffer_ach',
            // 'desanon3t_drop_ach',
            // 'desanon3t_total_ach',
            'traffic_oa',
            'traffic_rfi',
            'traffic_cme',
            'traffic_rfc',
            'traffic_sitac',
            'traffic_survey',
            'traffic_buffer',
            'traffic_drop',
            'traffic_total',
            'traffic_oa_ach',
            'traffic_rfi_ach',
            'traffic_cme_ach',
            'traffic_rfc_ach',
            'traffic_sitac_ach',
            'traffic_survey_ach',
            'traffic_buffer_ach',
            'traffic_drop_ach',
            'traffic_total_ach',
            'branch',
            'telkom_infra_oa',
            'telkom_infra_rfi',
            'telkom_infra_ny',
            'telkom_infra_drop',
            'telkom_infra_grand',
            'dmt_oa',
            'dmt_rfi',
            'dmt_ny',
            'dmt_drop',
            'dmt_grand',
            'pti_oa',
            'pti_rfi',
            'pti_ny',
            'pti_drop',
            'pti_grand',
            'acom_oa',
            'acom_rfi',
            'acom_ny',
            'acom_drop',
            'acom_grand',
            'stp_oa',
            'stp_rfi',
            'stp_ny',
            'stp_drop',
            'stp_grand',
            'cmi_oa',
            'cmi_rfi',
            'cmi_ny',
            'cmi_drop',
            'cmi_grand',
            'tbg_oa',
            'tbg_rfi',
            'tbg_ny',
            'tbg_drop',
            'tbg_grand',
            'lsp_oa',
            'lsp_rfi',
            'lsp_ny',
            'lsp_drop',
            'lsp_grand',
            'gmt_oa',
            'gmt_rfi',
            'gmt_ny',
            'gmt_drop',
            'gmt_grand',
            'ibs_oa',
            'ibs_rfi',
            'ibs_ny',
            'ibs_drop',
            'ibs_grand',
            'ebt_oa',
            'ebt_rfi',
            'ebt_ny',
            'ebt_drop',
            'ebt_grand',
            'abl_oa',
            'abl_rfi',
            'abl_ny',
            'abl_drop',
            'abl_grand',
            'total_tp_oa',
            'total_tp_rfi',
            'total_tp_ny',
            'total_tp_drop',
            'total_tp_grand',
            'notifikasi',
        ));
    }
}
