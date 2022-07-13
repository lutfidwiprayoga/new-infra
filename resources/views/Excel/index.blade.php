<table class="table table-bordered">
    <thead>
        <tr>
            <th>Batch KKST</th>
            <th>Program HQ</th>
            <th>Site ID Plan</th>
            <th>Site Name Plan</th>
            <th>Site ID Actual</th>
            <th>Site Name Actual</th>
            <th>Longitude</th>
            <th>Latitude</th>
            <th>Alamat Site</th>
            <th>District Operation</th>
            <th>Network Service</th>
            <th>City</th>
            <th>Branch</th>
            <th>Tower Provider</th>
            <th>Infra Type</th>
            <th>Progress Region</th>
            <th>Progress HQ</th>
            <th>Simple Progress</th>
            <th>Target Bulan Berjalan</th>
            <th>Issue</th>
            <th>Target RFI Date</th>
            <th>Target RFI Week</th>
            <th>KKST Date</th>
            <th>SLA RFC (B2S)</th>
            <th>SLA RFI</th>
            <th>DRM Date</th>
            <th>RFI Date</th>
            <th>OA Date</th>
            <th>Target OA Date</th>
            <th>Target OA Week</th>
            <th>Month OA</th>
            <th>TRM Type</th>
            <th>Capex EQP</th>
            <th>Capex TRM</th>
            <th>Antenna Height</th>
            <th>Remarks</th>
            <th>foto</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($traffic as $row)
            <tr role="row">
                <td>{{ $row->batch }}</td>
                <td>{{ $row->program_hq }}</td>
                <td>{{ $row->site_id_plan }}</td>
                <td>{{ $row->site_name_plan }}</td>
                <td>{{ $row->site_id_actual }}</td>
                <td>{{ $row->site_name_actual }}</td>
                <td>{{ $row->longitude }}</td>
                <td>{{ $row->lotitude }}</td>
                <td>{{ $row->alamat_site }}</td>
                <td>{{ $row->do }}</td>
                <td>{{ $row->ns }}</td>
                <td>{{ $row->city }}</td>
                <td>{{ $row->branch }}</td>
                <td>{{ $row->tower_provider }}</td>
                <td>{{ $row->infra_type }}</td>
                <td>{{ $row->progress_regional }}</td>
                <td>{{ $row->progress_hq }}</td>
                <td>{{ $row->simple_progress }}</td>
                <td>{{ $row->target_bulan_berjalan }}</td>
                <td>{{ $row->issue }}</td>
                @if ($row->target_rfi_date == 'DONE')
                    <td>{{ $row->target_rfi_date }}</td>
                @elseif($row->target_rfi_date == 'DROP')
                    <td>{{ $row->target_rfi_date }}</td>
                @else
                    <td>{{ gmdate('d-m-Y', $row->target_rfi_date) }}</td>
                @endif
                <td>{{ $row->target_rfi_week }}</td>
                <td>{{ gmdate('d-m-Y', $row->kkst_date) }}</td>
                @if ($row->sla_rfc_b2s == null)
                    <td></td>
                @else
                    <td>{{ gmdate('d-m-Y', $row->sla_rfc_b2s) }}</td>
                @endif
                @if ($row->sla_rfi == null)
                    <td></td>
                @else
                    <td>{{ gmdate('d-m-Y', $row->sla_rfi) }}</td>
                @endif
                <td>{{ gmdate('d-m-Y', $row->drm_date) }}</td>
                @if ($row->simple_progress == 'RFI')
                    <td>{{ gmdate('d-m-Y', $row->rfi_date) }}</td>
                @elseif ($row->simple_progress == 'DROP/HOLD')
                    <td>{{ $row->rfi_date }}</td>
                @else
                    <td></td>
                @endif
                @if ($row->simple_progress == 'ON AIR')
                    <td>{{ gmdate('d-m-Y', $row->oa_date) }}</td>
                @elseif($row->simple_progress == 'DROP/HOLD')
                    <td>{{ $row->oa_date }}</td>
                @else
                    <td></td>
                @endif
                @if ($row->simple_progress == 'ON AIR')
                    <td>{{ $row->target_oa_date }}</td>
                @elseif ($row->simple_progress == 'DROP/HOLD')
                    <td>{{ $row->target_oa_date }}</td>
                @else
                    <td>{{ gmdate('d-m-Y', $row->target_oa_date) }}</td>
                @endif
                <td>{{ $row->target_oa_week }}</td>
                <td>{{ $row->month_oa }}</td>
                <td>{{ $row->trm_type }}</td>
                <td>{{ $row->capex_eqp }}</td>
                <td>{{ $row->capex_trm }}</td>
                <td>{{ $row->antena_height }}</td>
                <td>{{ $row->remarks }}</td>
                <td>{{ $row->foto }}</td>
            </tr>
        @endforeach
    </tbody>
</table>
