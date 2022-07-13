@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="{{ route('sitelist.update', $traffic->id) }}" method="POST" enctype="multipart/form-data">
                    @method('PUT')
                    @csrf
                    <div class="row">
                        <!--========== BATCH ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="batch">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="batch_id">Batch</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->batch }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== PROGRAM HQ ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="program_hq">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="program_hq_id">Program HQ</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->program_hq }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== SITE ID PLAN ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="siteidplan">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="siteidplan_id">Site ID Plan</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->site_id_plan }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== SITE NAME PLAN ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Site Name Plan</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->site_name_plan }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== SITE ID ACTUAL ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="siteidactual">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="siteidactual_id">Site ID Actual</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->site_id_actual }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== SITE NAME ACTUAL ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Site Name Actual</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->site_name_actual }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== LONGITUDE ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Longitude</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name="longitude"
                                        value="{{ $traffic->longitude }}">
                                </div>
                            </div>
                        </div>
                        <!--========== LOTITUDE ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Latitude</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name="lotitude"
                                        value="{{ $traffic->lotitude }}">
                                </div>
                            </div>
                        </div>
                        <!--========== Alamat ==========-->
                        <div class="col-md-12">
                            <div class="form-group row align-items-center">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label">Alamat Site</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <input class="form-control" type="text" name="alamat_site"
                                        value="{{ $traffic->alamat_site }}">
                                </div>
                            </div>
                        </div>
                        <!--========== BRANCH ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="branch">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="branch_id">Branch</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->branch }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== CITY ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="city">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="city_id">City</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->city }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== NS ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="ns">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="ns_id">Network Service</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->ns }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== DO ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="do">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="do_id">Distrik Operation</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->do }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== INFRA TYPE ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="infratype">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="infratype_id">Infra Type</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->infra_type }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== TOWER PROVIDER ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="tower_provider">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="tower_provider_id">Tower Provider</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input class="form-control" type="text" name=""
                                        value="{{ $traffic->tower_provider }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--========== SIMPLE PROGRESS ==========-->
                        <div class="col-md-12">
                            <div class="form-group row align-items-center" id="simple_progress">
                                <div class="col-md-2 col-3">
                                    <label class="col-form-label" for="simple_progress_traffic">Simple
                                        Progress</label>
                                </div>
                                <div class="col-md-10 col-9">
                                    <select class="form-select" id="simple_progress_traffic" name="simple_progress"
                                        required>
                                        <option disabled selected>
                                            {{ $traffic->simple_progress }}</option>
                                        @foreach ($simpleprogress as $key)
                                            <option value="{{ $key->name }}">{{ $key->name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="text-danger">
                                        @error('simple_progress')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--========== PROGRESS HQ ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="progress_hq">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="progress_hq_traffic">Progress HQ</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="progress_hq_traffic" name="progress_hq" required>
                                        <option disabled selected>
                                            {{ $traffic->progress_hq }}</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('progress_hq')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--========== PROGRESS REGIONAL ==========-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="progress_regional">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="progress_regional_traffic">Progress
                                        Regional</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="progress_regional_traffic" name="progress_regional"
                                        required>
                                        <option disabled selected>
                                            {{ $traffic->progress_regional }}</option>
                                    </select>
                                    <div class="text-danger">
                                        @error('progress_regional')
                                            {{ $message }}
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--==== TARGET BULAN BERJALAN ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="targetbulanberjalan">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="targetbulanberjalan_traffic">Target Bulan
                                        Berjalan</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="targetbulanberjalan_traffic"
                                        name="target_bulan_berjalan">
                                        <option disabled selected>{{ $traffic->target_bulan_berjalan }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== ISSUE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="issue">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="issue_traffic">Issue</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="issue_traffic" name="issue">
                                        <option disabled selected>{{ $traffic->issue }}
                                        </option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== TARGET RFI DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="target_rfi">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="target_rfi_id">Target RFI</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    @if ($traffic->simple_progress == 'RFI')
                                        <select class="form-select" name="target_rfi_date">
                                            <option value="DONE">DONE</option>
                                        </select>
                                    @elseif ($traffic->simple_progress == 'ON AIR')
                                        <select class="form-select" name="target_rfi_date">
                                            <option value="DONE">DONE</option>
                                        </select>
                                    @elseif ($traffic->simple_progress == 'DROP/HOLD')
                                        <select class="form-select" name="target_rfi_date">
                                            <option value="DROP">DROP</option>
                                        </select>
                                    @else
                                        <input class="form-control" type="date" name="target_rfi_date">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== TARGET RFI WEEK ==-->
                        @if ($traffic->target_rfi_date == 'DONE')
                            <input type="hidden" name="target_rfi_week" value="DONE">
                        @elseif ($traffic->target_rfi_date == 'DROP')
                            <input type="hidden" name="target_rfi_week" value="DROP">
                        @else
                            <input type="hidden" name="target_rfi_week" value="">
                        @endif
                        <!--==== KKST DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">KKST Date</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" class="form-control" name=""
                                        value="{{ date('d-m-Y', strtotime($traffic->kkst_date)) }}" readonly>
                                </div>
                            </div>
                        </div>
                        <!--==== SLA RFC (B2S) ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">SLA RFC</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    {{-- @if ($traffic->infra_type == 'B2S')
                                        <input type="text" class="form-control" name="sla_rfc_b2s"
                                            value="{{ date('d-m-Y', strtotime($traffic->kkst_date)) }}" readonly>
                                    @elseif ($traffic->infra_type == 'Mini Macro')
                                        <input type="text" class="form-control" name="sla_rfc_b2s"
                                            value="{{ date('d-m-Y', strtotime($traffic->kkst_date)) }}" readonly>
                                    @elseif ($traffic->sla_rfc_b2s != null)
                                        <input type="text" class="form-control" name=""
                                            value="{{ date('d-m-Y', strtotime($traffic->sla_rfc_b2s)) }}" readonly>
                                    @else
                                        <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                            readonly>
                                    @endif --}}
                                    @if ($traffic->sla_rfc_b2s == null)
                                        <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                            readonly>
                                    @else
                                        <input type="text" class="form-control" name="sla_rfi"
                                            value="{{ date('d-m-Y', strtotime($traffic->sla_rfc_b2s)) }}" readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== SLA RFI ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">SLA RFI</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    {{-- @if ($traffic->infra_type == 'B2S')
                                        <input type="text" class="form-control" name="sla_rfi"
                                            value="{{ gmdate('d-m-Y', $traffic->kkst_date + 10368000) }}" readonly>
                                    @elseif ($traffic->infra_type == 'Collo TP')
                                        <input type="text" class="form-control" name="sla_rfi"
                                            value="{{ gmdate('d-m-Y', $traffic->kkst_date + 3456000) }}" readonly>
                                    @elseif ($traffic->infra_type == 'Mini Macro')
                                        <input type="text" class="form-control" name="sla_rfi"
                                            value="{{ gmdate('d-m-Y', $traffic->kkst_date + 7776000) }}" readonly>
                                    @else
                                        <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                            readonly>
                                    @endif --}}
                                    @if ($traffic->sla_rfi == null)
                                        <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                            readonly>
                                    @else
                                        <input type="text" class="form-control" name="sla_rfi"
                                            value="{{ date('d-m-Y', strtotime($traffic->sla_rfi)) }}" readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== DRM DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">DRM Date</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="date" class="form-control" name="drm_date">
                                </div>
                            </div>
                        </div>
                        <!--==== RFI DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">RFI Date</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    @if ($traffic->rfi_date == null)
                                        @if ($traffic->simple_progress == 'RFI')
                                            <input type="date" class="form-control" name="rfi_date" required>
                                        @elseif ($traffic->simple_progress == 'ON AIR')
                                            <input type="date" class="form-control" name="rfi_date" required>
                                        @elseif ($traffic->simple_progress == 'DROP/HOLD')
                                            <select class="form-select" id="" name="rfi_date">
                                                <option value="DROP">DROP</option>
                                            </select>
                                        @else
                                            <input type="text" class="form-control" name="" readonly>
                                        @endif
                                    @else
                                        @if ($traffic->simple_progress == 'RFI')
                                            <input type="date" class="form-control" name="rfi_date" required>
                                        @elseif ($traffic->simple_progress == 'ON AIR')
                                            <input type="date" class="form-control" name="rfi_date" required>
                                        @elseif ($traffic->simple_progress == 'DROP/HOLD')
                                            <select class="form-select" id="" name="rfi_date">
                                                <option value="DROP">DROP</option>
                                            </select>
                                        @else
                                            <input type="text" class="form-control" name="" readonly>
                                        @endif
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== OA DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">OA Date</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    @if ($traffic->simple_progress == 'ON AIR')
                                        <input type="date" class="form-control" name="oa_date" required>
                                    @elseif($traffic->simple_progress == 'DROP/HOLD')
                                        <select class="form-select" id="" name="oa_date">
                                            <option value="DROP">DROP</option>
                                        </select>
                                    @else
                                        <input type="text" class="form-control" name="oa_date" value=""
                                            readonly>
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== MONTH OA ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="month_oa">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="month_oa_id">Month OA</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="monthoa_traffic" name="month_oa">
                                        <option value="{{ $traffic->month_oa }}" selected>
                                            {{ $traffic->month_oa }}</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== TARGET OA DATE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="target_oa">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="target_oa_id">Target OA</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    @if ($traffic->simple_progress == 'ON AIR')
                                        <select class="form-select" id="target_oa_id" name="target_oa_date">
                                            <option value="DONE">DONE</option>
                                        </select>
                                    @elseif ($traffic->simple_progress == 'DROP/HOLD')
                                        <select class="form-select" id="target_oa_id" name="target_oa_date">
                                            <option value="DROP">DROP</option>
                                        </select>
                                    @else
                                        <input type="date" class="form-control" id="datepicker"
                                            name="target_oa_date">
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!--==== TARGET OA WEEK ==-->
                        @if ($traffic->target_oa_date == 'DONE')
                            <input type="hidden" name="target_oa_week" value="DONE">
                        @elseif ($traffic->target_oa_date == 'DROP')
                            <input type="hidden" name="target_oa_week" value="DROP">
                        @else
                            <input type="hidden" name="target_oa_week" value="">
                        @endif
                        <!--==== TRM TYPE ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="trm_type">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="trm_type_id">TRM TYPE</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="trm_type_id" name="trm_type">
                                        <option disabled selected>
                                            {{ $traffic->trm_type }}</option>
                                        <option value="FO TELKOM">FO TELKOM</option>
                                        <option value="RTN REDEPLOY">RTN REDEPLOY</option>
                                        <option value="DROP">DROP</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== CAPEX EQP ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="capex_eqp">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="capex_eqp_id">CAPEX EQP</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="capex_eqp_id" name="capex_eqp">
                                        <option disabled selected>
                                            {{ $traffic->capex_eqp }}</option>
                                        <option value="Capex Desa NON 3T">Capex Desa NON 3T</option>
                                        <option
                                            value="CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA TIMUR 2021">
                                            CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA
                                            TIMUR
                                            2021</option>
                                        <option value="CP 2022 - Win Java">CP 2022 - Win Java</option>
                                        <option value="CP 2022 - Settlement 5">CP 2022 - Settlement 5</option>
                                        <option value="CP 2 2021 Uplift">CP 2 2021 Uplift</option>
                                        <option value="CP 2 2021 Uplift Batch 2">CP 2 2021 Uplift Batch 2</option>
                                        <option value="CP 2 2022">CP 2 2022</option>
                                        <option value="CP1A 2021 Settlement 3">CP1A 2021 Settlement 3</option>
                                        <option value="CP1B 2021 New Infra Cherry Pick">CP1B 2021 New Infra Cherry
                                            Pick
                                        </option>
                                        <option value="CP1B 2021 Settlement 7">CP1B 2021 Settlement 7</option>
                                        <option value="Support New Infra Part 1875 non Collo">Support New Infra Part
                                            1875 non Collo</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== CAPEX TRM ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="capex_trm">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="capex_trm_id">CAPEX TRM</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <select class="form-select" id="capex_trm_id" name="capex_trm">
                                        <option disabled selected>
                                            {{ $traffic->capex_trm }}</option>
                                        <option value="BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022">
                                            BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022</option>
                                        <option value="Metro-E">Metro-E</option>
                                        <option value="Not Yet Presales / PO">Not Yet Presales / PO</option>
                                        <option value="Plan Presales Support New Infra Part 400 B2S 2022">Plan
                                            Presales
                                            Support New Infra Part 400 B2S 2022</option>
                                        <option value="Support New Infra Compat Permanisasi">Support New Infra
                                            Compat
                                            Permanisasi</option>
                                        <option value="Support New Infra Part 1875 non Collo">Support New Infra Part
                                            1875 non Collo</option>
                                        <option value="Support Settlemant 5 2021">Support Settlemant 5 2021</option>
                                        <option value="Other">Other</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <!--==== ANTENNA HEIGHT ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center" id="antenna-height">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label" for="antenna-height_id">Antenna Height
                                        (M)
                                    </label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" name="antena_height" class="form-control"
                                        value="{{ $traffic->antena_height }}">
                                </div>
                            </div>
                        </div>
                        <!--==== REMARKS ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">Remarks</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    <input type="text" name="remarks" class="form-control"
                                        value="{{ $traffic->remarks }}">
                                </div>
                            </div>
                        </div>
                        <!--==== FOTOGRID ==-->
                        <div class="col-md-6">
                            <div class="form-group row align-items-center">
                                <div class="col-md-4 col-3">
                                    <label class="col-form-label">FotoGrid</label>
                                </div>
                                <div class="col-md-8 col-9">
                                    @if ($traffic->foto == null)
                                        <input type="file" name="foto" class="form-control">
                                    @else
                                        <img src="{{ url('fotogrid/' . $traffic->foto) }}" width="100px">
                                    @endif
                                    {{-- <img src="{{ url('fotogrid/' . $fotogrid->foto) }}" width="100px"> --}}
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 mt-5" style="text-align: center">
                            <a href="{{ route('sitelist.index') }}" class="btn btn-default">Kembali</a>
                            <button type="submit" class="btn btn-danger show_confirm" id="alert_demo_8"
                                data-id="{{ $traffic->id }}">Save changes</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--========= TARGET BULAN BERJALAN TRAFFIC ==========-->
    <script>
        $('#simple_progress_traffic').change(function() {
            $('#targetbulanberjalan_traffic').val("");
            if ($('#simple_progress_traffic option:selected').text() == "DROP/HOLD") {
                $('#targetbulanberjalan_traffic').empty();
                $('#targetbulanberjalan_traffic').append('<option hidden>-</option>');
                $('#targetbulanberjalan_traffic').html('<option value="DROP">DROP</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "ON AIR") {
                $('#targetbulanberjalan_traffic').empty();
                $('#targetbulanberjalan_traffic').append('<option hidden>-</option>');
                $('#targetbulanberjalan_traffic').html(
                    '<option value="DONE OA (April)">DONE OA (April)</option><option value="DONE OA (May)">DONE OA (May)</option><option value="DONE OA (June)">DONE OA (June)</option><option value="DONE OA (July)">DONE OA (July)</option>'
                );
            } else {
                $('#targetbulanberjalan_traffic').empty();
                $('#targetbulanberjalan_traffic').append('<option hidden>-</option>');
                $('#targetbulanberjalan_traffic').html(
                    '<option value="Optimis">Optimis</option><option value="Pesimis">Pesimis</option>'
                );
            }
        });
    </script>
    <!--========= ISSUE TRAFFIC ==========-->
    <script>
        $('#simple_progress_traffic').change(function() {
            $('#issue_traffic').val("");
            if ($('#simple_progress_traffic option:selected').text() == "DROP/HOLD") {
                $('#issue_traffic').empty();
                $('#issue_traffic').append('<option hidden>-</option>');
                $('#issue_traffic').html('<option value="DROP">DROP</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "ON AIR") {
                $('#issue_traffic').empty();
                $('#issue_traffic').append('<option hidden>-</option>');
                $('#issue_traffic').html('<option value="no issue (Sudah OA)">no issue (Sudah OA)</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "RFI") {
                $('#issue_traffic').empty();
                $('#issue_traffic').append('<option hidden>-</option>');
                $('#issue_traffic').html('<option value="on plan">on plan</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "NY RFI") {
                $('#issue_traffic').empty();
                $('#issue_traffic').append('<option hidden>-</option>');
                $('#issue_traffic').html('<option value="Belum RFI">Belum RFI</option>');
            } else {
                $('#issue_traffic').empty();
                $('#issue_traffic').append('<option hidden>-</option>');
                $('#issue_traffic').html('<option value=""></option>');
            }
        });
    </script>
    <!--========= TARGET RFI DATE ==========-->
    {{-- <script>
        $('#simple_progress_traffic').change(function() {
            $('#target_rfi_id').val("");
            $('#target_rfi_input').val("");
            if ($('#simple_progress_traffic option:selected').text() == "RFI") {
                $('#target_rfi_input').hide(50);
                $('#target_rfi_id').prop("hidden", false);
                $('#target_rfi_id').append('<option hidden>-</option>');
                $('#target_rfi_id').html('<option value="DONE">DONE</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "ON AIR") {
                $('#target_rfi_input').hide(50);
                $('#target_rfi_id').prop("hidden", false);
                $('#target_rfi_id').append('<option hidden>-</option>');
                $('#target_rfi_id').html('<option value="DONE">DONE</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "DROP/HOLD") {
                $('#target_rfi_input').hide(50);
                $('#target_rfi_id').prop("hidden", false);
                $('#target_rfi_id').append('<option hidden>-</option>');
                $('#target_rfi_id').html('<option value="DROP">DROP</option>');
            } else {
                $('#target_rfi_id').hide(50);
                $('#target_rfi_input').prop("hidden", false);
                $('#target_rfi_input').append('<input hidden>');
                $('#target_rfi_input').html('<input type="date" name="target_rfi_date">');
            }
        });
    </script> --}}
    <!--========= MONTH OA TRAFFIC ==========-->
    <script>
        $('#simple_progress_traffic').change(function() {
            $('#monthoa_traffic').val("");
            if ($('#simple_progress_traffic option:selected').text() == "DROP/HOLD") {
                $('#monthoa_traffic').empty();
                $('#monthoa_traffic').append('<option hidden>-</option>');
                $('#monthoa_traffic').html('<option value="DROP">DROP</option>');
            } else {
                $('#monthoa_traffic').empty();
                $('#monthoa_traffic').append('<option hidden>-</option>');
                $('#monthoa_traffic').html(
                    '<option value="January">January</option><option value="February">February</option><option value="March">March</option><option value="April">April</option><option value="May">May</option><option value="June">June</option><option value="July">July</option><option value="August">August</option><option value="September">September</option><option value="October">October</option><option value="November">November</option><option value="December">December</option>'
                );
            }
        });
    </script>
    <!--========= PROGRES HQ TRAFFIC ==========-->
    {{-- <script>
        let modal_id = null;
        let id_simple = null;
        let id_hq = null;
    
        function openModal(id) {
            console.log(id);
            modal_id = id
            console.log()
    
            id_simple = document.getElementById(`simple_progress_traffic${id}`).value
            // await axios.get(`progreshq/by_simple_id/${simple_progress_id}`)
            //     .then(async (resp) => {
            //         console.log(resp)
            //         resp.data.data.forEach(item => {
            //             $(`#progress_hq_traffic${id}`).html(`
            //                 <option value='${item.id}'>
            //                     ${item.name}
            //                 </option>
            //             `)
            //         })
            //         // await axios.get('/progress_regional/by_progress_hq_id/')
    
            //     })
            getDataProgressHQ(id_simple)
    
            console.log(id_simple)
    
            document.getElementById(`simple_progress_traffic${id}`).addEventListener('change', async function(e) {
                id_simple = e.target.value
                getDataProgressHQ(id_simple)
    
            })
    
            document.getElementById(`progress_hq_traffic${id}`).addEventListener('change', function(e) {
                id_hq = e.target.value
                getDataProgressRegional(id_hq)
            })
    
        }
    
        function getDataProgressHQ(simple_id) {
            axios.get(`progreshq/by_simple_id/${simple_id}`)
                .then((resp) => {
                    $(`#progress_hq_traffic${modal_id}`).html(`
                            <option>
                                --
                            </option>
                        `)
                    resp.data.data.forEach(item => {
                        $(`#progress_hq_traffic${modal_id}`).append(`
                            <option value='${item.id}'>
                                ${item.name}
                            </option>
                        `)
                    })
                    // await axios.get('/progress_regional/by_progress_hq_id/')
    
                })
        }
    
        function getDataProgressRegional(id_hq) {
            axios.get(`/progress_regional/by_progress_hq_id/${id_hq}`)
                .then((resp) => {
                    $(`#progress_regional_traffic${modal_id}`).html(`
                            <option>
                                --
                            </option>
                        `)
                    resp.data.data.forEach(item => {
                        $(`#progress_regional_traffic${modal_id}`).append(`
                            <option value='${item.id}'>
                                ${item.name}
                            </option>
                        `)
                    })
                    // await axios.get('/progress_regional/by_progress_hq_id/')
    
                })
        }
        $(document).ready(() => {
            let simple_progres_id = $('#simple_progress_traffic').val();
        })
        $(`#simple_progress_traffic${modal_id}`).change(function(e) {
    
            console.log("hahah")
    
        });
    </script> --}}
    <script>
        $('#simple_progress_traffic').change(function() {
            $('#progress_hq_traffic').val("");
            if ($('#simple_progress_traffic option:selected').text() == "DROP/HOLD") {
                $('#progress_hq_traffic').empty();
                $('#progress_hq_traffic').append('<option>-</option>');
                $('#progress_hq_traffic').html(
                    '<option>-</option><option value="DROP">DROP</option><option value="HOLD">HOLD</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "NY RFI") {
                $('#progress_hq_traffic').empty();
                $('#progress_hq_traffic').append('<option >-</option>');
                $('#progress_hq_traffic').html(
                    '<option>-</option><option value="WAITING KOM/KKST">WAITING KOM/KKST</option><option value="SURVEY">SURVEY</option><option value="DRM">DRM</option><option value="CANCEL">CANCEL</option><option value="SITAC">SITAC</option><option value="RFC">RFC</option><option value="CME">CME</option>'
                );
            } else if ($('#simple_progress_traffic option:selected').text() == "ON AIR") {
                $('#progress_hq_traffic').empty();
                $('#progress_hq_traffic').append('<option >-</option>');
                $('#progress_hq_traffic').html('<option>-</option><option value="ON AIR">ON AIR</option>');
            } else if ($('#simple_progress_traffic option:selected').text() == "RFI") {
                $('#progress_hq_traffic').empty();
                $('#progress_hq_traffic').append('<option>-</option>');
                $('#progress_hq_traffic').html('<option>-</option><option value="RFI">RFI</option>');
            } else {
                $('#progress_hq_traffic').empty();
                $('#progress_hq_traffic').append('<option >-</option>');
                $('#progress_hq_traffic').html(
                    '<option>-</option><option value="RE-KOM/KKST">RE-KOM/KKST</option>');
            }
        });
    </script>
    <!--========= PROGRES REGIONAL TRAFFIC ==========-->
    <script>
        $('#progress_hq_traffic').change(function() {
            $('#progress_regional_traffic').val("");
            if ($('#progress_hq_traffic option:selected').text() == "HOLD") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="14. HOLD">14. HOLD</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "DROP") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="15. DROP">15. DROP</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "WAITING KOM/KKST") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html(
                    '<option value="00. WAITING KOM/KKST">00. WAITING KOM/KKST</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "SURVEY") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="01. SURVEY">01. SURVEY</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "DRM") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="02. DRM">02. DRM</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "CANCEL") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="03. CANCEL">03. CANCEL</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "RFC") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="07. RFC">07. RFC</option>');
            } else if ($('#progress_hq_traffic option:selected').text() == "CME") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html(
                    '<option value="08. CME OG">08. CME OG</option><option value="09. PLN CONNECTION">09. PLN CONNECTION</option>'
                );
            } else if ($('#progress_hq_traffic option:selected').text() == "SITAC") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html(
                    '<option value="04. BAN/BAK">04. BAN/BAK</option><option value="05. IW OG">05. IW OG</option><option value="06. REKOM/PERIZINAN">06. REKOM/PERIZINAN</option>'
                );
            } else if ($('#progress_hq_traffic option:selected').text() == "ON AIR") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html(
                    '<option value="11. LV MONITORING">11. LV MONITORING</option><option value="12. CONNECTED">12. CONNECTED</option><option value="13. ON AIR">13. ON AIR</option>'
                );
            } else if ($('#progress_hq_traffic option:selected').text() == "RFI") {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="10. RFI">10. RFI</option>');
            } else {
                $('#progress_regional_traffic').empty();
                $('#progress_regional_traffic').append('<option hidden>-</option>');
                $('#progress_regional_traffic').html('<option value="16. RE-KOM/KKST">16. RE-KOM/KKST</option>');
            }
        });
    </script>
    {{-- <!--========= RFI DATE ==========-->
    <script>
        $('#simpleprogress-id').change(function() {
            $('#rfi_date_id').val("");
            $('#rfi_date_input').val("");
            if ($('#simpleprogress-id option:selected').text() == "RFI") {
                $('#rfi_date_id').hide(50);
                $('#rfi_date_input').prop("hidden", false);
                $('#rfi_date_input').append('<input hidden>');
                $('#rfi_date_input').html('<input type="date" name="rfi_date">');
            } else if ($('#simpleprogress-id option:selected').text() == "DROP/HOLD") {
                $('#rfi_date_input').hide(50);
                $('#rfi_date_id').prop("hidden", false);
                $('#rfi_date_id').append('<option hidden>-</option>');
                $('#rfi_date_id').html('<option value="DROP">DROP</option>');
            }
        });
    </script>
    <!--========= OA DATE ==========-->
    <script>
        $('#simpleprogress-id').change(function() {
            $('#oa_date_id').val("");
            $('#oa_date').val("");
            if ($('#simpleprogress-id option:selected').text() == "ON AIR") {
                $('#oa_date_id').hide(50);
                $('#oa_date').prop("hidden", false);
                $('#oa_date').append('<input hidden>');
                $('#oa_date').html('<input type="date" name="oa_date">');
            } else if ($('#simpleprogress-id option:selected').text() == "DROP/HOLD") {
                $('#oa_date').hide(50);
                $('#oa_date_id').prop("hidden", false);
                $('#oa_date_id').append('<option hidden>-</option>');
                $('#oa_date_id').html('<option value="DROP">DROP</option>');
            }
        });
    </script>
    <!--========= TARGET OA DATE ==========-->
    <script>
        $('#simpleprogress-id').change(function() {
            $('#target_oa_id').val("");
            $('#target_oa_input').val("");
            if ($('#simpleprogress-id option:selected').text() == "ON AIR") {
                $('#target_oa_input').hide(50);
                $('#target_oa_id').prop("hidden", false);
                $('#target_oa_id').append('<option hidden>-</option>');
                $('#target_oa_id').html('<option value="DONE">DONE</option>');
            } else if ($('#simpleprogress-id option:selected').text() == "DROP/HOLD") {
                $('#target_oa_input').hide(50);
                $('#target_oa_id').prop("hidden", false);
                $('#target_oa_id').append('<option hidden>-</option>');
                $('#target_oa_id').html('<option value="DROP">DROP</option>');
            } else {
                $('#target_oa_id').hide(50);
                $('#target_oa_input').prop("hidden", false);
                $('#target_oa_input').append('<input hidden>');
                $('#target_oa_input').html('<input type="date" name="target_oa_date">');
            }
        });
    </script> --}}
@endsection
