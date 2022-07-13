@extends('layouts.app')
@section('content')
    <div class="page-heading">
        @foreach ($notifikasi as $item)
            <div class="alert alert-warning alert-dismissible fade show" role="alert"
                style="color: #000; background-color: #fff3cd;padding-right: 0px">
                <div class="row">
                    <div class="col-md-10">
                        <strong>Pemberitahuan!!</strong> New Infra {{ $item->newinfra->site_id_actual }} telah
                        diupdate oleh {{ $item->user->username }}<br>
                        <span class="time"
                            style="color: rgb(143, 143, 143)">{{ $item->created_at->diffForHumans() }}</span>
                    </div>
                    <div class="col-md-2">
                        <form action="{{ route('notif.read', $item->id) }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <button type="submit" class="btn btn-link"
                                style="padding: 1.25rem 1rem; position: absolute;right: 0;top: 0;z-index: 2;">Mark as
                                Read</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pivot</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Dashboard</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="row">
                <!--============ CO 2021 ===============-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">CO 2021</th>
                                    </tr>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>#Site</th>
                                        <th>Ach</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ON AIR</td>
                                        <td>{{ $co2021_oa }}</td>
                                        <td>{{ $co2021_oa_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFI</td>
                                        <td>{{ $co2021_rfi }}</td>
                                        <td>{{ $co2021_rfi_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>CME</td>
                                        <td>{{ $co2021_cme }}</td>
                                        <td>{{ $co2021_cme_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFC</td>
                                        <td>{{ $co2021_rfc }}</td>
                                        <td>{{ $co2021_rfc_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SITAC</td>
                                        <td>{{ $co2021_sitac }}</td>
                                        <td>{{ $co2021_sitac_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEY</td>
                                        <td>{{ $co2021_survey }}</td>
                                        <td>{{ $co2021_survey_ach }}%</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>BUFFER (DROP)</td>
                                        <td>{{ $co2021_buffer }}</td>
                                        <td>{{ $co2021_buffer_ach }}%</td>
                                    </tr> --}}
                                    <tr>
                                        <td>DROP/HOLD</td>
                                        <td>{{ $co2021_drop }}</td>
                                        <td>{{ $co2021_drop_ach }}%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $co2021_total }}</th>
                                        <th>{{ $co2021_total_ach }}%</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--============ KKST 2022 ===============-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">KKST 2022</th>
                                    </tr>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>#Site</th>
                                        <th>Ach</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ON AIR</td>
                                        <td>{{ $kkst2022_oa }}</td>
                                        <td>{{ $kkst2022_oa_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFI</td>
                                        <td>{{ $kkst2022_rfi }}</td>
                                        <td>{{ $kkst2022_rfi_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>CME</td>
                                        <td>{{ $kkst2022_cme }}</td>
                                        <td>{{ $kkst2022_cme_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFC</td>
                                        <td>{{ $kkst2022_rfc }}</td>
                                        <td>{{ $kkst2022_rfc_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SITAC</td>
                                        <td>{{ $kkst2022_sitac }}</td>
                                        <td>{{ $kkst2022_sitac_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEY</td>
                                        <td>{{ $kkst2022_survey }}</td>
                                        <td>{{ $kkst2022_survey_ach }}%</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>BUFFER (DROP)</td>
                                        <td>{{ $kkst2022_buffer }}</td>
                                        <td>{{ $kkst2022_buffer_ach }}%</td>
                                    </tr> --}}
                                    <tr>
                                        <td>DROP/HOLD</td>
                                        <td>{{ $kkst2022_drop }}</td>
                                        <td>{{ $kkst2022_drop_ach }}%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $kkst2022_total }}</th>
                                        <th>{{ $kkst2022_total_ach }}%</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--============ Site Recovery ===============-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">Site Recovery</th>
                                    </tr>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>#Site</th>
                                        <th>Ach</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ON AIR</td>
                                        <td>{{ $siterecovery_oa }}</td>
                                        <td>{{ $siterecovery_oa_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFI</td>
                                        <td>{{ $siterecovery_rfi }}</td>
                                        <td>{{ $siterecovery_rfi_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>CME</td>
                                        <td>{{ $siterecovery_cme }}</td>
                                        <td>{{ $siterecovery_cme_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFC</td>
                                        <td>{{ $siterecovery_rfc }}</td>
                                        <td>{{ $siterecovery_rfc_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SITAC</td>
                                        <td>{{ $siterecovery_sitac }}</td>
                                        <td>{{ $siterecovery_sitac_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEY</td>
                                        <td>{{ $siterecovery_survey }}</td>
                                        <td>{{ $siterecovery_survey_ach }}%</td>
                                    </tr>
                                    {{-- <tr>
                                        <td>BUFFER (DROP)</td>
                                        <td>{{ $siterecovery_buffer }}</td>
                                        <td>{{ $siterecovery_buffer_ach }}%</td>
                                    </tr> --}}
                                    <tr>
                                        <td>DROP/HOLD</td>
                                        <td>{{ $siterecovery_drop }}</td>
                                        <td>{{ $siterecovery_drop_ach }}%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $siterecovery_total }}</th>
                                        <th>{{ $siterecovery_total_ach }}%</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Total New Infra ===============-->
            <div class="row">
                <!--============ Desa Non 3T ===============-->
                {{-- <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">DESA NON 3T</th>
                                    </tr>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>#Site</th>
                                        <th>Ach</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ON AIR</td>
                                        <td>{{ $desanon3t_oa }}</td>
                                        <td>{{ $desanon3t_oa_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFI</td>
                                        <td>{{ $desanon3t_rfi }}</td>
                                        <td>{{ $desanon3t_rfi_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>CME</td>
                                        <td>{{ $desanon3t_cme }}</td>
                                        <td>{{ $desanon3t_cme_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFC</td>
                                        <td>{{ $desanon3t_rfc }}</td>
                                        <td>{{ $desanon3t_rfc_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SITAC</td>
                                        <td>{{ $desanon3t_sitac }}</td>
                                        <td>{{ $desanon3t_sitac_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEY</td>
                                        <td>{{ $desanon3t_survey }}</td>
                                        <td>{{ $desanon3t_survey_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>DROP/HOLD</td>
                                        <td>{{ $desanon3t_drop }}</td>
                                        <td>{{ $desanon3t_drop_ach }}%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $desanon3t_total }}</th>
                                        <th>{{ $desanon3t_total_ach }}%</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div> --}}
                <!--============ Total New Infra ===============-->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">TOTAL New Infra Jatim</th>
                                    </tr>
                                    <tr>
                                        <th>Milestone</th>
                                        <th>#Site</th>
                                        <th>Ach</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>ON AIR</td>
                                        <td>{{ $traffic_oa }}</td>
                                        <td>{{ $traffic_oa_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFI</td>
                                        <td>{{ $traffic_rfi }}</td>
                                        <td>{{ $traffic_rfi_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>CME</td>
                                        <td>{{ $traffic_cme }}</td>
                                        <td>{{ $traffic_cme_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>RFC</td>
                                        <td>{{ $traffic_rfc }}</td>
                                        <td>{{ $traffic_rfc_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SITAC</td>
                                        <td>{{ $traffic_sitac }}</td>
                                        <td>{{ $traffic_sitac_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>SURVEY</td>
                                        <td>{{ $traffic_survey }}</td>
                                        <td>{{ $traffic_survey_ach }}%</td>
                                    </tr>
                                    <tr>
                                        <td>DROP/HOLD</td>
                                        <td>{{ $traffic_drop }}</td>
                                        <td>{{ $traffic_drop_ach }}%</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Total</th>
                                        <th>{{ $traffic_total }}</th>
                                        <th>{{ $traffic_total_ach }}%</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--============ Total New Infra Chart ===============-->
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div id="chartInfra"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--============ Total Tower Provider ===============-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dataTable-container">
                                <table class="table table-striped" id="table-towerprovider">
                                    <thead>
                                        <tr>
                                            <th colspan="6" class="text-center">TOTAL Tower Provider New Infra Jatim</th>
                                        </tr>
                                        <tr>
                                            <th>Tower Provider</th>
                                            <th>ON AIR</th>
                                            <th>RFI</th>
                                            <th>NY RFI</th>
                                            <th>DROP/HOLD</th>
                                            <th>Grand Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Telkom Infra</td>
                                            <td>{{ $telkom_infra_oa }}</td>
                                            <td>{{ $telkom_infra_rfi }}</td>
                                            <td>{{ $telkom_infra_ny }}</td>
                                            <td>{{ $telkom_infra_drop }}</td>
                                            <td>{{ $telkom_infra_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>DMT</td>
                                            <td>{{ $dmt_oa }}</td>
                                            <td>{{ $dmt_rfi }}</td>
                                            <td>{{ $dmt_ny }}</td>
                                            <td>{{ $dmt_drop }}</td>
                                            <td>{{ $dmt_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>PTI</td>
                                            <td>{{ $pti_oa }}</td>
                                            <td>{{ $pti_rfi }}</td>
                                            <td>{{ $pti_ny }}</td>
                                            <td>{{ $pti_drop }}</td>
                                            <td>{{ $pti_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>ACOM</td>
                                            <td>{{ $acom_oa }}</td>
                                            <td>{{ $acom_rfi }}</td>
                                            <td>{{ $acom_ny }}</td>
                                            <td>{{ $acom_drop }}</td>
                                            <td>{{ $acom_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>STP</td>
                                            <td>{{ $stp_oa }}</td>
                                            <td>{{ $stp_rfi }}</td>
                                            <td>{{ $stp_ny }}</td>
                                            <td>{{ $stp_drop }}</td>
                                            <td>{{ $stp_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>CMI</td>
                                            <td>{{ $cmi_oa }}</td>
                                            <td>{{ $cmi_rfi }}</td>
                                            <td>{{ $cmi_ny }}</td>
                                            <td>{{ $cmi_drop }}</td>
                                            <td>{{ $cmi_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>TBG</td>
                                            <td>{{ $tbg_oa }}</td>
                                            <td>{{ $tbg_rfi }}</td>
                                            <td>{{ $tbg_ny }}</td>
                                            <td>{{ $tbg_drop }}</td>
                                            <td>{{ $tbg_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>LSP</td>
                                            <td>{{ $lsp_oa }}</td>
                                            <td>{{ $lsp_rfi }}</td>
                                            <td>{{ $lsp_ny }}</td>
                                            <td>{{ $lsp_drop }}</td>
                                            <td>{{ $lsp_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>GMT</td>
                                            <td>{{ $gmt_oa }}</td>
                                            <td>{{ $gmt_rfi }}</td>
                                            <td>{{ $gmt_ny }}</td>
                                            <td>{{ $gmt_drop }}</td>
                                            <td>{{ $gmt_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>IBS</td>
                                            <td>{{ $ibs_oa }}</td>
                                            <td>{{ $ibs_rfi }}</td>
                                            <td>{{ $ibs_ny }}</td>
                                            <td>{{ $ibs_drop }}</td>
                                            <td>{{ $ibs_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>EBT</td>
                                            <td>{{ $ebt_oa }}</td>
                                            <td>{{ $ebt_rfi }}</td>
                                            <td>{{ $ebt_ny }}</td>
                                            <td>{{ $ebt_drop }}</td>
                                            <td>{{ $ebt_grand }}</td>
                                        </tr>
                                        <tr>
                                            <td>ABL</td>
                                            <td>{{ $abl_oa }}</td>
                                            <td>{{ $abl_rfi }}</td>
                                            <td>{{ $abl_ny }}</td>
                                            <td>{{ $abl_drop }}</td>
                                            <td>{{ $abl_grand }}</td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Grand Total</th>
                                            <th>{{ $total_tp_oa }}</th>
                                            <th>{{ $total_tp_rfi }}</th>
                                            <th>{{ $total_tp_ny }}</th>
                                            <th>{{ $total_tp_drop }}</th>
                                            <th>{{ $total_tp_grand }}</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <!--============ Total New Infra Chart ===============-->
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div id="chartTowerProvider"></div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
@section('javascript')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <!--Grafik Chart -->
    <script>
        var pieColors = (function() {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                // Start out with a darkened base color (negative brighten), and end
                // up with a much brighter color
                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
            }
            return colors;
        }());
        Highcharts.setOptions({
            colors: ['#4e80d7', '#ff7d08', '#b3b3b3', '#ffc40a', '#318ad5', '#136300', '#167601', '#773838',
                '#6AF9C4'
            ]
        });

        // Build the chart
        Highcharts.chart('chartInfra', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Total New Infra Jatim'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    // colors: pieColors,
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b><br>{point.percentage:.1f} %',
                        distance: -50,
                        filter: {
                            property: 'percentage',
                            operator: '>',
                            value: 4
                        }
                    }
                }
            },
            series: [{
                name: 'ACH',
                data: [{
                        name: 'ON AIR',
                        y: {!! json_encode($traffic_oa_ach) !!}
                    },
                    {
                        name: 'RFI',
                        y: {!! json_encode($traffic_rfi_ach) !!}
                    },
                    {
                        name: 'CME',
                        y: {!! json_encode($traffic_cme_ach) !!}
                    },
                    {
                        name: 'RFC',
                        y: {!! json_encode($traffic_rfc_ach) !!}
                    },
                    {
                        name: 'SITAC',
                        y: {!! json_encode($traffic_sitac_ach) !!}
                    },
                    {
                        name: 'SURVEY',
                        y: {!! json_encode($traffic_survey_ach) !!}
                    },
                    {
                        name: 'BUFFER',
                        y: {!! json_encode($traffic_buffer_ach) !!}
                    },
                    {
                        name: 'DROP/HOLD',
                        y: {!! json_encode($traffic_drop_ach) !!}
                    }
                ]
            }]
        });
    </script>
    <!--Stacked Chart-->
    <script>
        var barColors = (function() {
            var colors = [],
                base = Highcharts.getOptions().colors[0],
                i;

            for (i = 0; i < 10; i += 1) {
                // Start out with a darkened base color (negative brighten), and end
                // up with a much brighter color
                colors.push(Highcharts.color(base).brighten((i - 3) / 7).get());
            }
            return colors;
        }());
        Highcharts.setOptions({
            colors: ['#ffdd09', '#bbbfc1', '#46a9e3', '#4e80d7']
        });
        Highcharts.chart('chartTowerProvider', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Distribusi TP & Progress Rollout New Infra 2022'
            },
            xAxis: {
                categories: ['Telkom Infra', 'DMT', 'PTI', 'ACOM', 'STP', 'CMI', 'TBG', 'LSP', 'GMT', 'IBS', 'EBT',
                    'ABL'
                ]
            },
            yAxis: {
                allowDecimals: false,
                min: 0,
                title: {
                    text: '#site'
                }
            },
            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b><br/>',
                shared: true
            },
            plotOptions: {
                colors: barColors,
                column: {
                    stacking: 'normal'
                }
            },
            series: [{
                name: 'DROP/HOLD',
                data: [{!! json_encode($telkom_infra_drop) !!}, {!! json_encode($dmt_drop) !!}, {!! json_encode($pti_drop) !!},
                    {!! json_encode($acom_drop) !!}, {!! json_encode($stp_drop) !!}, {!! json_encode($cmi_drop) !!},
                    {!! json_encode($tbg_drop) !!}, {!! json_encode($lsp_drop) !!}, {!! json_encode($gmt_drop) !!},
                    {!! json_encode($ibs_drop) !!}, {!! json_encode($ebt_drop) !!}, {!! json_encode($abl_drop) !!}
                ]
            }, {
                name: 'NY RFI',
                data: [{!! json_encode($telkom_infra_ny) !!}, {!! json_encode($dmt_ny) !!}, {!! json_encode($pti_ny) !!},
                    {!! json_encode($acom_ny) !!}, {!! json_encode($stp_ny) !!}, {!! json_encode($cmi_ny) !!},
                    {!! json_encode($tbg_ny) !!}, {!! json_encode($lsp_ny) !!}, {!! json_encode($gmt_ny) !!},
                    {!! json_encode($ibs_ny) !!}, {!! json_encode($ebt_ny) !!}, {!! json_encode($abl_ny) !!}
                ]
            }, {
                name: 'RFI',
                data: [{!! json_encode($telkom_infra_rfi) !!}, {!! json_encode($dmt_rfi) !!}, {!! json_encode($pti_rfi) !!},
                    {!! json_encode($acom_rfi) !!}, {!! json_encode($stp_rfi) !!}, {!! json_encode($cmi_rfi) !!},
                    {!! json_encode($tbg_rfi) !!}, {!! json_encode($lsp_rfi) !!}, {!! json_encode($gmt_rfi) !!},
                    {!! json_encode($ibs_rfi) !!}, {!! json_encode($ebt_rfi) !!}, {!! json_encode($abl_rfi) !!}
                ]
            }, {
                name: 'ON AIR',
                data: [{!! json_encode($telkom_infra_oa) !!}, {!! json_encode($dmt_oa) !!}, {!! json_encode($pti_oa) !!},
                    {!! json_encode($acom_oa) !!}, {!! json_encode($stp_oa) !!}, {!! json_encode($cmi_oa) !!},
                    {!! json_encode($tbg_oa) !!}, {!! json_encode($lsp_oa) !!}, {!! json_encode($gmt_oa) !!},
                    {!! json_encode($ibs_oa) !!}, {!! json_encode($ebt_oa) !!}, {!! json_encode($abl_oa) !!}
                ]
            }]
        });
    </script>
@endsection
