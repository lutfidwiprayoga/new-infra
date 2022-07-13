@foreach ($traffic as $row)
    <div class="modal fade" id="detail-sitelist{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="batch">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="batch_id">Batch</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->batch }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="program_hq">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="program_hq_id">Program HQ</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->program_hq }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="siteidplan">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="siteidplan_id">Site ID Plan</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->site_id_plan }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">Site Name Plan</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->site_name_plan }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="siteidactual">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="siteidactual_id">Site ID Actual</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->site_id_actual }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">Site Name Actual</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->site_name_actual }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">Longitude</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="longitude"
                                            value="{{ $row->longitude }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">Latitude</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="lotitude"
                                            value="{{ $row->lotitude }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-2 col-3">
                                        <label class="col-form-label">Alamat</label>
                                    </div>
                                    <div class="col-md-10 col-9">
                                        <input type="text" id="alamat_site" class="form-control" name=""
                                            value="{{ $row->alamat_site }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="branch">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="branch_id">Branch</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->branch }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="city">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="city_id">City</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->city }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="ns">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="ns_id">Network Service</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->ns }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="do">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="do_id">Distrik Operation</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name=""
                                            value="{{ $row->do }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="infratype">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="infratype_id">Infra Type</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="infra_type"
                                            value="{{ $row->infra_type }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="tower_provider">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="tower_provider_id">Tower Provider</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="tower_provider"
                                            value="{{ $row->tower_provider }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group row align-items-center" id="simple_progress">
                                    <div class="col-md-2 col-3">
                                        <label class="col-form-label" for="simple_progress_id">Simple Progress</label>
                                    </div>
                                    <div class="col-md-10 col-9">
                                        <input class="form-control" type="text" name="simple_progress"
                                            value="{{ $row->simple_progress }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="progress_hq">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="progress_hq_id">Progress HQ</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="progress_hq"
                                            value="{{ $row->progress_hq }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="progress_regional">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="progress_regional_id">Progress
                                            Regional</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="progress_regional"
                                            value="{{ $row->progress_regional }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="targetbulanberjalan">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="targetbulanberjalan_id">Target Bulan
                                            Berjalan</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="target_bulan_berjalan"
                                            value="{{ $row->target_bulan_berjalan }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="issue">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="issue_id">Issue</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input class="form-control" type="text" name="issue"
                                            value="{{ $row->issue }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="target_rfi">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="target_rfi_id">Target RFI</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        @if ($row->target_rfi_date == null)
                                            <input class="form-control" type="text" name="target_rfi_date"
                                                value="" readonly>
                                        @elseif ($row->target_rfi_date == 'DONE')
                                            <input class="form-control" type="text" name="target_rfi_date"
                                                value="{{ $row->target_rfi_date }}" readonly>
                                        @elseif ($row->target_rfi_date == 'DROP')
                                            <input class="form-control" type="text" name="target_rfi_date"
                                                value="{{ $row->target_rfi_date }}" readonly>
                                        @else
                                            <input class="form-control" type="text" name="target_rfi_date"
                                                value="{{ date('d-m-Y', strtotime($row->target_rfi_date)) }}"
                                                readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">KKST Date</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" class="form-control" name=""
                                            value="{{ date('d-m-Y', strtotime($row->kkst_date)) }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">SLA RFC</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        {{-- @if ($row->infra_type == 'B2S')
                                            <input type="text" class="form-control" name="sla_rfc_b2s"
                                                value="{{ gmdate('d-m-Y', $row->kkst_date + 5184000) }}" readonly>
                                        @elseif ($row->infra_type == 'Mini Macro')
                                            <input type="text" class="form-control" name="sla_rfc_b2s"
                                                value="{{ gmdate('d-m-Y', $row->kkst_date + 3888000) }}" readonly> --}}
                                        @if ($row->sla_rfc_b2s != null)
                                            <input type="text" class="form-control" name="sla_rfc_b2s"
                                                value="{{ date('d-m-Y', strtotime($row->sla_rfc_b2s)) }}" readonly>
                                        @else
                                            <input type="text" class="form-control" name="sla_rfc_b2s"
                                                value="" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">SLA RFI</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        {{-- @if ($row->infra_type == 'B2S')
                                            <input type="text" class="form-control" name="sla_rfi"
                                                value="{{ gmdate('d-m-Y', $row->sla_rfi) }}" readonly>
                                        @elseif ($row->infra_type == 'Collo TP')
                                            <input type="text" class="form-control" name="sla_rfi"
                                                value="{{ gmdate('d-m-Y', $row->sla_rfi) }}" readonly>
                                        @elseif ($row->infra_type == 'Mini Macro')
                                            <input type="text" class="form-control" name="sla_rfi"
                                                value="{{ gmdate('d-m-Y', $row->sla_rfi) }}" readonly>
                                        @else
                                            <input type="text" class="form-control" name="sla_rfi" value="" readonly>
                                        @endif --}}
                                        @if ($row->sla_rfi == null)
                                            <input type="text" class="form-control" name="sla_rfi" value=""
                                                readonly>
                                        @else
                                            <input type="text" class="form-control" name="sla_rfi"
                                                value="{{ date('d-m-Y', strtotime($row->sla_rfi)) }}" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">DRM Date</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        @if ($row->drm_date == null)
                                            <input type="text" class="form-control" name="drm_date"
                                                value="" readonly>
                                        @else
                                            <input type="text" class="form-control" name="drm_date"
                                                value="{{ date('d-m-Y', strtotime($row->drm_date)) }}" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">RFI Date</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        @if ($row->rfi_date == null)
                                            <input type="text" class="form-control" name="rfi_date"
                                                value="" readonly>
                                        @else
                                            @if ($row->simple_progress == 'RFI')
                                                <input type="text" class="form-control" name="rfi_date"
                                                    value="{{ date('d-m-Y', strtotime($row->rfi_date)) }}" readonly>
                                            @elseif ($row->simple_progress == 'ON AIR')
                                                <input type="text" class="form-control" name="rfi_date"
                                                    value="{{ date('d-m-Y', strtotime($row->rfi_date)) }}" readonly>
                                            @elseif ($row->simple_progress == 'DROP/HOLD')
                                                <input type="text" class="form-control" name="rfi_date"
                                                    value="{{ $row->rfi_date }}" readonly>
                                            @else
                                                <input type="text" class="form-control" name="" readonly>
                                            @endif
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">OA Date</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        @if ($row->simple_progress == 'ON AIR')
                                            <input type="text" class="form-control" name="oa_date"
                                                value="{{ date('d-m-Y', strtotime($row->oa_date)) }}" readonly>
                                        @elseif($row->simple_progress == 'DROP/HOLD')
                                            <input type="text" class="form-control" name="oa_date"
                                                value="{{ $row->oa_date }}" readonly>
                                        @else
                                            <input type="text" class="form-control" name="" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="month_oa">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="month_oa_id">Month OA</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" class="form-control" name="month_oa"
                                            value="{{ $row->month_oa }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="target_oa">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="target_oa_id">Target OA</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        @if ($row->simple_progress == 'ON AIR')
                                            <input type="text" class="form-control" name="target_oa_date"
                                                value="{{ $row->target_oa_date }}" readonly>
                                        @elseif ($row->simple_progress == 'DROP/HOLD')
                                            <input type="text" class="form-control" name="target_oa_date"
                                                value="{{ $row->target_oa_date }}" readonly>
                                        @elseif ($row->target_oa_date != null)
                                            <input type="text" class="form-control" name="target_oa_date"
                                                value="{{ date('d-m-Y', strtotime($row->target_oa_date)) }}"
                                                readonly>
                                        @else
                                            <input type="text" class="form-control" name="target_oa_date"
                                                value="" readonly>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="trm_type">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="trm_type_id">TRM TYPE</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" class="form-control" name=""
                                            value="{{ $row->trm_type }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="capex_eqp">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="capex_eqp_id">CAPEX EQP</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" class="form-control" name=""
                                            value="{{ $row->capex_eqp }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center" id="capex_trm">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="capex_trm_id">CAPEX TRM</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" class="form-control" name=""
                                            value="{{ $row->capex_trm }}" readonly>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center" id="antenna-height">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label" for="antenna-height_id">Antenna Height
                                            (M)
                                        </label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" name="antenna_height" id="antenna-height_id"
                                            class="form-control" value="{{ $row->antenna_height }}" readonly>
                                    </div>
                                </div>
                                <div class="form-group row align-items-center">
                                    <div class="col-md-4 col-3">
                                        <label class="col-form-label">Remarks</label>
                                    </div>
                                    <div class="col-md-8 col-9">
                                        <input type="text" name="remarks" class="form-control"
                                            value="{{ $row->remarks }}" readonly>
                                    </div>
                                </div>
                            </div>
                            @if ($row->foto == null)
                            @else
                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-4 col-3">
                                            <label class="col-form-label" for="fotogrid_id">FOTO GRID</label>
                                        </div>
                                        <div class="col-md-8 col-9">
                                            <a href="{{ url('fotogrid/' . $row->foto) }}"
                                                class="btn btn-danger btn-sm">Lihat Fotogrid</a>
                                        </div>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endforeach
