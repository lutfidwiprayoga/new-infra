<?php

namespace App\Imports;

use App\Models\NewInfra;
use App\Models\Traffic;
use Carbon\Carbon;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithCalculatedFormulas;

class ImportExcel implements WithCalculatedFormulas, ToCollection
{
    /**
     * @param Collection $collection
     */
    public function collection(Collection $collection)
    {
        // dd($collection);
        foreach ($collection as $key => $row) {
            /*if ($key >= 1) {
                if ($row[20] == 'DROP') {
                    $target_rfi_date = $row[20];
                } elseif ($row[20] == 'DONE') {
                    $target_rfi_date = $row[20];
                } elseif ($row[20] == null) {
                    $target_rfi_date = null;
                } else {
                    $target_rfi_date = ((int)$row[20] - 25569) * 86400;
                }
                if ($row[21] == 'DROP') {
                    $target_rfi_week = $row[21];
                } elseif ($row[21] == 'DONE') {
                    $target_rfi_week = $row[21];
                } elseif ($row[21] == null) {
                    $target_rfi_week = null;
                } else {
                    $target_rfi_week = Carbon::parse($target_rfi_date)->weekOfYear;
                }
                if ($row[22] == null) {
                    $kkst_date = $row[22];
                } else {
                    $kkst_date = ((int)$row[22] - 25569) * 86400;
                }
                if ($row[23] == null) {
                    $sla_rfc_b2s = $row[23];
                } elseif ($row[14] == 'B2S') {
                    $sla_rfc_b2s = (int)$kkst_date + 5184000;
                } elseif ($row[14] == 'Mini Macro') {
                    $sla_rfc_b2s = (int)$kkst_date + 3888000;
                }
                if ($row[24] == null) {
                    $sla_rfi = $row[24];
                } elseif ($row[14] == 'B2S') {
                    $sla_rfi = (int)$kkst_date + 10368000;
                } elseif ($row[14] == 'Collo TP') {
                    $sla_rfi = (int)$kkst_date + 3456000;
                } elseif ($row[14] == 'Mini Macro') {
                    $sla_rfi = (int)$kkst_date + 7776000;
                }
                if ($row[25] == null) {
                    $drm_date = $row[25];
                } else {
                    $drm_date = ((int)$row[25] - 25569) * 86400;
                }
                if ($row[26] == null) {
                    $rfi_date = $row[26];
                } elseif ($row[26] == 'DROP') {
                    $rfi_date = $row[26];
                } else {
                    $rfi_date = ((int)$row[26] - 25569) * 86400;
                }
                if ($row[27] == null) {
                    $oa_date = $row[27];
                } elseif ($row[27] == 'DROP') {
                    $oa_date = $row[27];
                } else {
                    $oa_date = ((int)$row[27] - 25569) * 86400;
                }
                if ($row[28] == 'DROP') {
                    $target_oa_date = $row[28];
                } elseif ($row[28] == 'DONE') {
                    $target_oa_date = $row[28];
                } else {
                    $target_oa_date = ((int)$row[28] - 25569) * 86400;
                }
                if ($row[29] == 'DROP') {
                    $target_oa_week = $row[29];
                } elseif ($row[29] == 'DONE') {
                    $target_oa_week = $row[29];
                } else {
                    $target_oa_week = Carbon::parse($target_oa_date)->weekOfYear;
                }
                Traffic::create([
                    'batch' => $row[0],
                    'program_hq' => $row[1],
                    'site_id_plan' => $row[2],
                    'site_name_plan' => $row[3],
                    'site_id_actual' => $row[4],
                    'site_name_actual' => $row[5],
                    'longitude' => $row[6],
                    'lotitude' => $row[7],
                    'alamat_site' => $row[8],
                    'do' => $row[9],
                    'ns' => $row[10],
                    'city' => $row[11],
                    'branch' => $row[12],
                    'tower_provider' => $row[13],
                    'infra_type' => $row[14],
                    'progress_regional' => $row[15],
                    'progress_hq' => $row[16],
                    'simple_progress' => $row[17],
                    'target_bulan_berjalan' => $row[18],
                    'issue' => $row[19],
                    'target_rfi_date' => $target_rfi_date,
                    'target_rfi_week' => $target_rfi_week,
                    'kkst_date' => $kkst_date,
                    'sla_rfc_b2s' => $sla_rfc_b2s,
                    'sla_rfi' => $sla_rfi,
                    'drm_date' => $drm_date,
                    'rfi_date' => $rfi_date,
                    'oa_date' => $oa_date,
                    'target_oa_date' => $target_oa_date,
                    'target_oa_week' => $target_oa_week,
                    'month_oa' => $row[30],
                    'trm_type' => $row[31],
                    'capex_eqp' => $row[32],
                    'capex_trm' => $row[33],
                    'antena_height' => (string)$row[34],
                    'remarks' => $row[35],
                ]);
            }*/
            if ($key >= 1) {
                if ($row[20] == 'DROP') {
                    $target_rfi_date = $row[20];
                } elseif ($row[20] == 'DONE') {
                    $target_rfi_date = $row[20];
                } elseif ($row[20] == null) {
                    $target_rfi_date = null;
                } else {
                    $target_rfi_date = Carbon::parse($row[20])->format('d-m-Y');
                }
                if ($row[21] == 'DROP') {
                    $target_rfi_week = $row[21];
                } elseif ($row[21] == 'DONE') {
                    $target_rfi_week = $row[21];
                } elseif ($row[21] == null) {
                    $target_rfi_week = null;
                } else {
                    $target_rfi_week = Carbon::parse($target_rfi_date)->weekOfYear;
                }
                if ($row[22] == null) {
                    $kkst_date = $row[22];
                } else {
                    $kkst_date = Carbon::parse($row[22])->format('d-m-Y');
                }
                if ($row[23] == null) {
                    $sla_rfc_b2s = $row[23];
                } elseif ($row[14] == 'B2S') {
                    $sla_rfc_b2s = Carbon::parse($kkst_date)->addDay(60)->format('d-m-Y');
                } elseif ($row[14] == 'Mini Macro') {
                    $sla_rfc_b2s = Carbon::parse($kkst_date)->addDay(45)->format('d-m-Y');
                }
                if ($row[24] == null) {
                    $sla_rfi = $row[24];
                } elseif ($row[14] == 'B2S') {
                    $sla_rfi = Carbon::parse($kkst_date)->addDay(120)->format('d-m-Y');
                } elseif ($row[14] == 'Collo TP') {
                    $sla_rfi = Carbon::parse($kkst_date)->addDay(40)->format('d-m-Y');
                } elseif ($row[14] == 'Mini Macro') {
                    $sla_rfi = Carbon::parse($kkst_date)->addDay(90)->format('d-m-Y');
                }
                if ($row[25] == null) {
                    $drm_date = $row[25];
                } else {
                    $drm_date = Carbon::parse($row[25])->format('d-m-Y');
                }
                if ($row[26] == null) {
                    $rfi_date = $row[26];
                } elseif ($row[26] == 'DROP') {
                    $rfi_date = $row[26];
                } else {
                    $rfi_date = Carbon::parse($row[26])->format('d-m-Y');
                }
                if ($row[27] == null) {
                    $oa_date = $row[27];
                } elseif ($row[27] == 'DROP') {
                    $oa_date = $row[27];
                } else {
                    $oa_date = Carbon::parse($row[27])->format('d-m-Y');
                }
                if ($row[28] == 'DROP') {
                    $target_oa_date = $row[28];
                } elseif ($row[28] == 'DONE') {
                    $target_oa_date = $row[28];
                } else {
                    $target_oa_date = Carbon::parse($row[28])->format('d-m-Y');
                }
                if ($row[29] == 'DROP') {
                    $target_oa_week = $row[29];
                } elseif ($row[29] == 'DONE') {
                    $target_oa_week = $row[29];
                } elseif ($row[29] == null) {
                    $target_oa_week = null;
                } else {
                    $target_oa_week = Carbon::parse($target_oa_date)->weekOfYear;
                }
                NewInfra::create([
                    'batch' => $row[0],
                    'program_hq' => $row[1],
                    'site_id_plan' => $row[2],
                    'site_name_plan' => $row[3],
                    'site_id_actual' => $row[4],
                    'site_name_actual' => $row[5],
                    'longitude' => $row[6],
                    'lotitude' => $row[7],
                    'alamat_site' => $row[8],
                    'do' => $row[9],
                    'ns' => $row[10],
                    'city' => $row[11],
                    'branch' => $row[12],
                    'tower_provider' => $row[13],
                    'infra_type' => $row[14],
                    'progress_regional' => $row[15],
                    'progress_hq' => $row[16],
                    'simple_progress' => $row[17],
                    'target_bulan_berjalan' => $row[18],
                    'issue' => $row[19],
                    'target_rfi_date' => $target_rfi_date,
                    'target_rfi_week' => $target_rfi_week,
                    'kkst_date' => $kkst_date,
                    'sla_rfc_b2s' => $sla_rfc_b2s,
                    'sla_rfi' => $sla_rfi,
                    'drm_date' => $drm_date,
                    'rfi_date' => $rfi_date,
                    'oa_date' => $oa_date,
                    'target_oa_date' => $target_oa_date,
                    'target_oa_week' => $target_oa_week,
                    'month_oa' => $row[30],
                    'trm_type' => $row[31],
                    'capex_eqp' => $row[32],
                    'capex_trm' => $row[33],
                    'antena_height' => (string)$row[34],
                    'remarks' => $row[35],
                    'foto' => $row[36],
                ]);
            }
        }
    }
}
