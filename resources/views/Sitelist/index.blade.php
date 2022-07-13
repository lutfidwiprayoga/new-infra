@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Sitelist</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Sitelist</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-12 col-md-6">
                    @if (auth()->user()->level == 'admin')
                        <button type="button" class="btn btn-danger btn-sm mb-2" data-bs-toggle="modal"
                            data-bs-target="#add-sitelist">Tambah
                            Data</button>
                    @endif
                    <a href="{{ route('exportexcel') }}" class="btn btn-danger btn-sm mb-2"><i
                            class="fa fa-file-excel"></i> Export To Excel</a>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="card">
                @if (auth()->user()->level == 'admin')
                    <div class="card-header">
                        <form action="{{ route('importexcel') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="row">
                                <div class="col-md-11">
                                    <input class="form-control form-control-sm" id="formFileSm" type="file"
                                        name="file">
                                </div>
                                <div class="col-md-1">
                                    <button class="btn btn-danger btn-sm">Upload</button>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
                <div class="card-body">
                    <div id="add-row_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                        <div class="dataTable-container">
                            <table class="table table-striped table-bordered" id="table-sitelist">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Batch KKST</th>
                                        <th>Program HQ</th>
                                        <th>Site ID Actual</th>
                                        <th>Site Name Actual</th>
                                        <th>District Operation</th>
                                        <th>Network Service</th>
                                        <th>City</th>
                                        <th>Branch</th>
                                        <th>Tower Provider</th>
                                        <th>Infra Type</th>
                                        <th>Progress Region</th>
                                        <th>Progress HQ</th>
                                        <th>Simple Progress</th>
                                        <th>Target RFI Date</th>
                                        <th>Target OA Date</th>
                                        <th>Target RFI Week</th>
                                        <th>Target OA Week</th>
                                        <th>TRM Type</th>
                                        @if (auth()->user()->level == 'admin')
                                            <th>Aksi</th>
                                        @endif
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    @foreach ($traffic as $row)
                                        <tr role="row">
                                            <td>{{ $no++ }}</td>
                                            <td>{{ $row->batch }}</td>
                                            <td>{{ $row->program_hq }}</td>
                                            <td><button class="btn btn-link" data-bs-toggle="modal"
                                                    data-bs-target="#detail-sitelist{{ $row->id }}">{{ $row->site_id_actual }}</button>
                                            </td>
                                            <td>{{ $row->site_name_actual }}</td>
                                            <td>{{ $row->do }}</td>
                                            <td>{{ $row->ns }}</td>
                                            <td>{{ $row->city }}</td>
                                            <td>{{ $row->branch }}</td>
                                            <td>{{ $row->tower_provider }}</td>
                                            <td>{{ $row->infra_type }}</td>
                                            <td>{{ $row->progress_regional }}</td>
                                            <td>{{ $row->progress_hq }}</td>
                                            <td>{{ $row->simple_progress }}</td>
                                            @if ($row->target_rfi_date == 'DONE')
                                                <td>{{ $row->target_rfi_date }}</td>
                                            @elseif ($row->target_rfi_date == 'DROP')
                                                <td>{{ $row->target_rfi_date }}</td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($row->target_rfi_date)) }}</td>
                                            @endif
                                            @if ($row->target_oa_date == 'DONE')
                                                <td>{{ $row->target_rfi_date }}</td>
                                            @elseif ($row->target_oa_date == 'DROP')
                                                <td>{{ $row->target_oa_date }}</td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($row->target_oa_date)) }}</td>
                                            @endif
                                            <td>{{ $row->target_oa_week }}</td>
                                            <td>{{ $row->target_rfi_week }}</td>
                                            <td>{{ $row->trm_type }}</td>
                                            @if (auth()->user()->level == 'admin')
                                                <td><a href="{{ route('sitelist.edit', $row->id) }}"
                                                        class="btn btn-link"><i class="fa fa-edit"
                                                            style="color: red"></i></a>
                                                    <button class="btn btn-link" data-bs-toggle="modal"
                                                        data-bs-target="#deleteTraffic{{ $row->id }}"><i
                                                            class="fa fa-times-circle" style="color: red"></i></button>
                                                </td>
                                            @endif
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>No</th>
                                        <th>Batch KKST</th>
                                        <th>Program HQ</th>
                                        <th>Site ID Actual</th>
                                        <th>Site Name Actual</th>
                                        <th>District Operation</th>
                                        <th>Network Service</th>
                                        <th>City</th>
                                        <th>Branch</th>
                                        <th>Tower Provider</th>
                                        <th>Infra Type</th>
                                        <th>Progress Region</th>
                                        <th>Progress HQ</th>
                                        <th>Simple Progress</th>
                                        <th>Target RFI</th>
                                        <th>Target OA</th>
                                        <th>Target RFI Week</th>
                                        <th>Target OA Week</th>
                                        <th>TRM Type</th>
                                        @if (auth()->user()->level == 'admin')
                                            <th></th>
                                        @endif
                                    </tr>
                                    <th>No</th>
                                    <th>Batch KKST</th>
                                    <th>Program HQ</th>
                                    <th>Site ID Actual</th>
                                    <th>Site Name Actual</th>
                                    <th>District Operation</th>
                                    <th>Network Service</th>
                                    <th>City</th>
                                    <th>Branch</th>
                                    <th>Tower Provider</th>
                                    <th>Infra Type</th>
                                    <th>Progress Region</th>
                                    <th>Progress HQ</th>
                                    <th>Simple Progress</th>
                                    <th>Target RFI</th>
                                    <th>Target OA</th>
                                    <th>Target RFI Week</th>
                                    <th>Target OA Week</th>
                                    <th>TRM Type</th>
                                    @if (auth()->user()->level == 'admin')
                                        <th>Aksi</th>
                                    @endif
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    @include('Sitelist.add')
    @include('Sitelist.detail')
    <script>
        $(document).ready(function() {
            var table = $('#table-sitelist').DataTable();
            $("#table-sitelist tfoot tr th").each(function(i) {
                var select = $('<select><option value=""></option></select>')
                    .appendTo($(this).empty())
                    .on('change', function() {
                        var val = $(this).val();

                        table.column(i)
                            .search(val ? '^' + $(this).val() + '$' :
                                val, true, false)
                            .draw();
                    });

                table.column(i).data().unique().sort().each(function(d, j) {
                    select.append('<option value="' + d + '">' + d + '</option>')
                });
            });
        });
    </script>
    <!--===Delete Data-==-->
    @foreach ($traffic as $row)
        <div class="modal fade" id="deleteTraffic{{ $row->id }}">
            <div class="modal-dialog modal-sm">
                <div class="modal-content bg-default">
                    <div class="modal-header">
                        <h4 class="modal-title">Hapus Data</h4>
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Hapus Data ? {{ $row->site_id_actual }}?&hellip;</p>
                    </div>
                    <form action="{{ route('sitelist.destroy', $row->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <div class="modal-footer justify-content-between">
                            <button type="button" class="btn btn-default btn-link" data-bs-dismiss="modal">Tidak</button>
                            <button type="submit" class="btn btn-danger">Ya,
                                Hapus</button>
                        </div>
                    </form>
                </div>
                <!-- /.modal-content -->
            </div>
            <!-- /.modal-dialog -->
        </div>
    @endforeach
    <!--===Update Data-==-->
    {{-- @foreach ($traffic as $row)
        <div class="modal fade" id="edit-sitelist{{ $row->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <form action="{{ route('sitelist.update', $row->id) }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="modal-body">
                            <div class="row">
                                <!--========== BATCH ==========-->
                                <div class="col-md-6">
                                    <div class="form-group row align-items-center" id="batch">
                                        <div class="col-md-4 col-3">
                                            <label class="col-form-label" for="batch_id">Batch</label>
                                        </div>
                                        <div class="col-md-8 col-9">
                                            <input class="form-control" type="text" name="" value="{{ $row->batch }}"
                                                readonly>
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
                                                value="{{ $row->program_hq }}" readonly>
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
                                                value="{{ $row->site_id_plan }}" readonly>
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
                                                value="{{ $row->site_name_plan }}" readonly>
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
                                                value="{{ $row->site_id_actual }}" readonly>
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
                                                value="{{ $row->site_name_actual }}" readonly>
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
                                                value="{{ $row->longitude }}">
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
                                                value="{{ $row->lotitude }}">
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
                                            <input class="form-control" type="text" name="" value="{{ $row->branch }}"
                                                readonly>
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
                                            <input class="form-control" type="text" name="" value="{{ $row->city }}"
                                                readonly>
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
                                            <input class="form-control" type="text" name="" value="{{ $row->ns }}"
                                                readonly>
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
                                            <input class="form-control" type="text" name="" value="{{ $row->do }}"
                                                readonly>
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
                                                value="{{ $row->infra_type }}" readonly>
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
                                                value="{{ $row->tower_provider }}" readonly>
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
                                            <select class="form-select"
                                                id="simple_progress_traffic" name="simple_progress" required>
                                                <option disabled selected>{{ $row->simple_progress }}</option>
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
                                            <select class="form-select" id="progress_hq_traffic" name="progress_hq"
                                                required>
                                                <option disabled selected>{{ $row->progress_hq }}</option>
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
                                            <select class="form-select" id="progress_regional_traffic"
                                                name="progress_regional" required>
                                                <option disabled selected>{{ $row->progress_regional }}</option>
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
                                            @if ($row->simple_progress == 'ON AIR')
                                            <select class="form-select" id="targetbulanberjalan_id"
                                                name="target_bulan_berjalan">
                                                <option>-</option>
                                                <option value="DONE OA (Maret)">DONE OA (Maret)</option>
                                                <option value="DONE OA (April)">DONE OA (APRIL)</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'DROP/HOLD')
                                            <select class="form-select" id="targetbulanberjalan_id"
                                                name="target_bulan_berjalan">
                                                <option>-</option>
                                                <option value="DROP">DROP</option>
                                            </select>
                                        @else
                                            <select class="form-select" id="targetbulanberjalan_id"
                                                name="target_bulan_berjalan">
                                                <option>-</option>
                                                <option value="Optimis">Optimis</option>
                                                <option value="Pesimis">Pesimis</option>
                                            </select>
                                        @endif
                                            <select class="form-select" id="targetbulanberjalan_traffic"
                                                name="target_bulan_berjalan">
                                                <option>-</option>
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
                                            @if ($row->simple_progress == 'ON AIR')
                                            <select class="form-select" id="issue_id" name="issue">
                                                <option>-</option>
                                                <option value="no issue (Sudah OA)">no issue (Sudah OA)</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'RFI')
                                            <select class="form-select" id="issue_id" name="issue">
                                                <option>-</option>
                                                <option value="on plan">on plan</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'NY RFI')
                                            <select class="form-select" id="issue_id" name="issue">
                                                <option>-</option>
                                                <option value="Belum RFI">Belum RFI</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'DROP/HOLD')
                                            <select class="form-select" id="issue_id" name="issue">
                                                <option>-</option>
                                                <option value="DROP">DROP</option>
                                            </select>
                                        @endif
                                            <select class="form-select" id="issue_traffic" name="issue">
                                                <option>-</option>
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
                                            @if ($row->simple_progress == 'RFI')
                                                <select class="form-select" name="target_rfi_date">
                                                    <option value="DONE">DONE</option>
                                                </select>
                                            @elseif ($row->simple_progress == 'DROP/HOLD')
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
                                @if ($row->target_rfi_date == 'DONE')
                                    <input type="hidden" name="target_rfi_week" value="DONE">
                                @elseif ($row->target_rfi_date == 'DROP')
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
                                                value="{{ gmdate('d-m-Y', $row->kkst_date) }}" readonly>
                                        </div>
                                    </div>
                                </div>
                                <!--==== SLA RFC (B2S) ==-->
                                <div class="col-md-6">
                                    <div class="form-group row align-items-center">
                                        <div class="col-md-4 col-3">
                                            <label class="col-form-label">SLA RFC (B2S)</label>
                                        </div>
                                        <div class="col-md-8 col-9">
                                            @if ($row->infra_type == 'B2S')
                                                <input type="text" class="form-control" name="sla_rfc_b2s"
                                                    value="{{ gmdate('Y-m-d', $row->kkst_date + 5184000) }}" readonly>
                                            @else
                                                <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                                    readonly>
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
                                            @if ($row->infra_type == 'B2S')
                                                <input type="text" class="form-control" name="sla_rfi"
                                                    value="{{ gmdate('Y-m-d', $row->kkst_date + 10368000) }}" readonly>
                                            @elseif ($row->infra_type == 'Collo TP')
                                                <input type="text" class="form-control" name="sla_rfi"
                                                    value="{{ gmdate('Y-m-d', $row->kkst_date + 3456000) }}" readonly>
                                            @else
                                                <input type="text" class="form-control" name="sla_rfc_b2s" value=""
                                                    readonly>
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
                                            @if ($row->simple_progress == 'RFI')
                                                <input type="date" class="form-control" name="rfi_date">
                                            @elseif ($row->simple_progress == 'DROP/HOLD')
                                                <select class="form-select" id="" name="rfi_date">
                                                    <option value="DROP">DROP</option>
                                                </select>
                                            @else
                                                <input type="text" class="form-control" name="" readonly>
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
                                            @if ($row->simple_progress == 'ON AIR')
                                                <input type="date" class="form-control" name="oa_date">
                                            @elseif($row->simple_progress == 'DROP/HOLD')
                                                <select class="form-select" id="" name="oa_date">
                                                    <option value="DROP">DROP</option>
                                                </select>
                                            @else
                                                <input type="text" class="form-control" name="oa_date" value="" readonly>
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
                                            @if ($row->simple_progress == 'ON AIR')
                                            <select class="form-select" id="month_oa" name="month_oa">
                                                <option>-</option>
                                                <option value="January">January</option>
                                                <option value="February">February</option>
                                                <option value="March">March</option>
                                                <option value="April">April</option>
                                                <option value="May">May</option>
                                                <option value="June">June</option>
                                                <option value="July">July</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'RFI')
                                            <select class="form-select" id="month_oa" name="month_oa">
                                                <option>-</option>
                                                <option value="on plan">on plan</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'NY RFI')
                                            <select class="form-select" id="month_oa" name="month_oa">
                                                <option>-</option>
                                                <option value="Belum RFI">Belum RFI</option>
                                            </select>
                                        @elseif ($row->simple_progress == 'DROP/HOLD')
                                            <select class="form-select" id="month_oa" name="month_oa">
                                                <option>-</option>
                                                <option value="DROP">DROP</option>
                                            </select>
                                        @endif
                                            <select class="form-select" id="monthoa_traffic" name="month_oa">
                                                <option>-</option>
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
                                            @if ($row->simple_progress == 'ON AIR')
                                                <select class="form-select" id="target_oa_id" name="target_oa_date">
                                                    <option value="DONE">DONE</option>
                                                </select>
                                            @elseif ($row->simple_progress == 'DROP/HOLD')
                                                <select class="form-select" id="target_oa_id" name="target_oa_date">
                                                    <option value="DROP">DROP</option>
                                                </select>
                                            @else
                                                <input type="date" class="form-control" name="target_oa_date">
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <!--==== TARGET OA WEEK ==-->
                                @if ($row->target_oa_date == 'DONE')
                                    <input type="hidden" name="target_oa_week" value="DONE">
                                @elseif ($row->target_oa_date == 'DROP')
                                    <input type="hidden" name="target_oa_week" value="DROP">
                                @else
                                    <input type="hidden" name="target_oa_week" value="">
                                @endif
                                <!--==== TRM TYPE ==-->
                                <div class="col-md-12">
                                    <div class="form-group row align-items-center" id="trm_type">
                                        <div class="col-md-2 col-3">
                                            <label class="col-form-label" for="trm_type_id">TRM TYPE</label>
                                        </div>
                                        <div class="col-md-10 col-9">
                                            <select class="form-select" id="trm_type_id" name="trm_type" required>
                                                <option disabled selected>{{ $row->trm_type }}</option>
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
                                                <option disabled selected>{{ $row->capex_eqp }}</option>
                                                <option value="Capex Desa NON 3T">Capex Desa NON 3T</option>
                                                <option
                                                    value="CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA TIMUR 2021">
                                                    CAPEX RAN NEW INFRA PERMANENISASI COMBAT PONDOK MABADI’UL IHSAN JAWA
                                                    TIMUR
                                                    2021</option>
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
                                                <option disabled selected>{{ $row->capex_trm }}</option>
                                                <option
                                                    value="BOQ Redeploy IP MW Jatim Area Support New Infra Part 400 2022">
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
                                                value="{{ $row->antena_height }}">
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
                                                value="{{ $row->remarks }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="submit" class="btn btn-danger show_confirm" style="width: 100%" id="alert_demo_8"
                                data-id="{{ $row->id }}">Save changes</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <script>
        $('#edit-sitelist').on('hidden.bs.modal', function(e) {
            $(this).find('form').trigger('reset');
        })
    </script>
    @endforeach --}}
@endsection
