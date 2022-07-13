@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">

                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Target OA</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h5>Target OA</h5>
                        </div>
                        <div class="card-body">
                            <div class="dataTable-container">
                                <table class="table table-striped table-bordered" id="close-b2s">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Batch KKST</th>
                                            <th>Site ID Actual</th>
                                            <th>Site Name Actual</th>
                                            <th>District Operation</th>
                                            <th>Network Service</th>
                                            <th>City</th>
                                            <th>Branch</th>
                                            <th>Tower Provider</th>
                                            <th>Infra Type</th>
                                            <th>KKST Date</th>
                                            <th>Target OA</th>
                                            <th>Simple Progress</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php $no = 1; ?>
                                        @foreach ($target_oa as $data)
                                            <tr>
                                                <td>{{ $no++ }}</td>
                                                <td>{{ $data->batch }}</td>
                                                <td>{{ $data->site_id_actual }}</td>
                                                <td>{{ $data->site_name_actual }}</td>
                                                <td>{{ $data->do }}</td>
                                                <td>{{ $data->ns }}</td>
                                                <td>{{ $data->city }}</td>
                                                <td>{{ $data->branch }}</td>
                                                <td>{{ $data->tower_provider }}</td>
                                                <td>{{ $data->infra_type }}</td>
                                                <td>{{ date('d-m-Y', strtotime($data->kkst_date)) }}</td>
                                                <td>{{ date('d-m-Y', strtotime($data->target_oa_date)) }}</td>
                                                <td>{{ $data->simple_progress }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
