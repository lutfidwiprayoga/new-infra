@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Pivot</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Win Java</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <!--============ Total New Infra Win Java ===============-->
            <div class="row">
                <!--============ Count Of Site ID Actual ===============-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="7" class="text-center">Progress New Infra Win Java</th>
                                    </tr>
                                    <tr>
                                        <th>SOW - TP</th>
                                        <th>ON AIR</th>
                                        <th>RFI</th>
                                        {{-- <th>CME</th> --}}
                                        <th>SITAC</th>
                                        <th>SURVEY</th>
                                        <th>DROP</th>
                                        <th>Grand Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr style="background-color: #318ad5;">
                                        <th class="text-white">Collo TP</th>
                                        <th class="text-white">{{ $collo_oa }}</th>
                                        <th class="text-white">{{ $collo_rfi }}</th>
                                        {{-- <th class="text-white">{{ $collo_cme }}</th> --}}
                                        <th class="text-white">{{ $collo_sitac }}</th>
                                        <th class="text-white">{{ $collo_survey }}</th>
                                        <th class="text-white">{{ $collo_drop }}</th>
                                        <th class="text-white">{{ $collo_grand }}</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">CMI</td>
                                        <td>{{ $cmi_collo_oa }}</td>
                                        <td>{{ $cmi_collo_rfi }}</td>
                                        {{-- <td>{{ $cmi_collo_cme }}</td> --}}
                                        <td>{{ $cmi_collo_sitac }}</td>
                                        <td>{{ $cmi_collo_survey }}</td>
                                        <td>{{ $cmi_collo_drop }}</td>
                                        <td>{{ $cmi_collo_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">DMT</td>
                                        <td>{{ $dmt_collo_oa }}</td>
                                        <td>{{ $dmt_collo_rfi }}</td>
                                        {{-- <td>{{ $dmt_collo_cme }}</td> --}}
                                        <td>{{ $dmt_collo_sitac }}</td>
                                        <td>{{ $dmt_collo_survey }}</td>
                                        <td>{{ $dmt_collo_drop }}</td>
                                        <td>{{ $dmt_collo_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">PTI</td>
                                        <td>{{ $pti_collo_oa }}</td>
                                        <td>{{ $pti_collo_rfi }}</td>
                                        {{-- <td>{{ $pti_collo_cme }}</td> --}}
                                        <td>{{ $pti_collo_sitac }}</td>
                                        <td>{{ $pti_collo_survey }}</td>
                                        <td>{{ $pti_collo_drop }}</td>
                                        <td>{{ $pti_collo_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">TBG</td>
                                        <td>{{ $tbg_collo_oa }}</td>
                                        <td>{{ $tbg_collo_rfi }}</td>
                                        {{-- <td>{{ $tbg_collo_cme }}</td> --}}
                                        <td>{{ $tbg_collo_sitac }}</td>
                                        <td>{{ $tbg_collo_survey }}</td>
                                        <td>{{ $tbg_collo_drop }}</td>
                                        <td>{{ $tbg_collo_grand }}</td>
                                    </tr>
                                    <tr style="background: #318ad5; color: white">
                                        <th>B2S</th>
                                        <th>{{ $b2s_oa }}</th>
                                        <th>{{ $b2s_rfi }}</th>
                                        {{-- <th>{{ $b2s_cme }}</th> --}}
                                        <th>{{ $b2s_sitac }}</th>
                                        <th>{{ $b2s_survey }}</th>
                                        <th>{{ $b2s_drop }}</th>
                                        <th>{{ $b2s_grand }}</th>
                                    </tr>
                                    <tr>
                                        <td class="text-center">DMT</td>
                                        <td>{{ $dmt_b2s_oa }}</td>
                                        <td>{{ $dmt_b2s_rfi }}</td>
                                        {{-- <td>{{ $dmt_b2s_cme }}</td> --}}
                                        <td>{{ $dmt_b2s_sitac }}</td>
                                        <td>{{ $dmt_b2s_survey }}</td>
                                        <td>{{ $dmt_b2s_drop }}</td>
                                        <td>{{ $dmt_b2s_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">TBG</td>
                                        <td>{{ $tbg_b2s_oa }}</td>
                                        <td>{{ $tbg_b2s_rfi }}</td>
                                        {{-- <td>{{ $tbg_b2s_cme }}</td> --}}
                                        <td>{{ $tbg_b2s_sitac }}</td>
                                        <td>{{ $tbg_b2s_survey }}</td>
                                        <td>{{ $tbg_b2s_drop }}</td>
                                        <td>{{ $tbg_b2s_grand }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total</th>
                                        <th>{{ $total_tp_oa }}</th>
                                        <th>{{ $total_tp_rfi }}</th>
                                        {{-- <th>{{ $total_tp_cme }}</th> --}}
                                        <th>{{ $total_tp_sitac }}</th>
                                        <th>{{ $total_tp_survey }}</th>
                                        <th>{{ $total_tp_drop }}</th>
                                        <th>{{ $total_tp_grand }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--============ Total New Infra ===============-->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="3" class="text-center">TOTAL New Infra Win Java</th>
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
                                    {{-- <tr>
                                        <td>CME</td>
                                        <td>{{ $traffic_cme }}</td>
                                        <td>{{ $traffic_cme_ach }}%</td>
                                    </tr> --}}
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
                                        <td>DROP</td>
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
                <!--============ Total New Infra Win Java Chart ===============-->
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <div id="chartInfra"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <!--============ Count Of Infra type ===============-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="7" class="text-center">TP Perfomance</th>
                                    </tr>
                                    <tr>
                                        <th>TP</th>
                                        <th>ON AIR</th>
                                        <th>RFI</th>
                                        {{-- <th>CME</th> --}}
                                        <th>SITAC</th>
                                        <th>SURVEY</th>
                                        <th>DROP</th>
                                        <th>Grand Total</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>CMI</td>
                                        <td>{{ $cmi_oa }}</td>
                                        <td>{{ $cmi_rfi }}</td>
                                        {{-- <td>{{ $cmi_cme }}</td> --}}
                                        <td>{{ $cmi_sitac }}</td>
                                        <td>{{ $cmi_survey }}</td>
                                        <td>{{ $cmi_drop }}</td>
                                        <td>{{ $cmi_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td>DMT</td>
                                        <td>{{ $dmt_oa }}</td>
                                        <td>{{ $dmt_rfi }}</td>
                                        {{-- <td>{{ $dmt_cme }}</td> --}}
                                        <td>{{ $dmt_sitac }}</td>
                                        <td>{{ $dmt_survey }}</td>
                                        <td>{{ $dmt_drop }}</td>
                                        <td>{{ $dmt_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td>PTI</td>
                                        <td>{{ $pti_oa }}</td>
                                        <td>{{ $pti_rfi }}</td>
                                        {{-- <td>{{ $pti_cme }}</td> --}}
                                        <td>{{ $pti_sitac }}</td>
                                        <td>{{ $pti_survey }}</td>
                                        <td>{{ $pti_drop }}</td>
                                        <td>{{ $pti_grand }}</td>
                                    </tr>
                                    <tr>
                                        <td>TBG</td>
                                        <td>{{ $tbg_oa }}</td>
                                        <td>{{ $tbg_rfi }}</td>
                                        {{-- <td>{{ $tbg_cme }}</td> --}}
                                        <td>{{ $tbg_sitac }}</td>
                                        <td>{{ $tbg_survey }}</td>
                                        <td>{{ $tbg_drop }}</td>
                                        <td>{{ $tbg_grand }}</td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total</th>
                                        <th>{{ $total_tp_oa }}</th>
                                        <th>{{ $total_tp_rfi }}</th>
                                        {{-- <th>{{ $total_tp_cme }}</th> --}}
                                        <th>{{ $total_tp_sitac }}</th>
                                        <th>{{ $total_tp_survey }}</th>
                                        <th>{{ $total_tp_drop }}</th>
                                        <th>{{ $total_tp_grand }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <!--============ Total New Infra Win Java Chart ===============-->
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div id="infratype_winjava"></div>
                        </div>
                    </div>
                </div>
            </div>
            <!--================ Total Target OA Win Java ================-->
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th colspan="2" class="text-center">Total Target OA Win Java</th>
                                    </tr>
                                    <tr>
                                        <th>Row Label</th>
                                        <th>Count Of Site ID Actual</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($winjava_target_oa as $data)
                                        <tr>
                                            @if ($data->target_oa_date == 'DONE')
                                                <td>{{ $data->target_oa_date }}</td>
                                            @elseif ($data->target_oa_date == 'DROP')
                                                <td>{{ $data->target_oa_date }}</td>
                                            @else
                                                <td>{{ date('d-m-Y', strtotime($data->target_oa_date)) }}</td>
                                            @endif
                                            <td class="text-center">{{ $data->total }}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Grand Total</th>
                                        <th class="text-center">{{ $winjava_target_oa_total }}</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div id="chartTargetOA"></div>
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
                text: 'Total New Infra Jatim Win Java'
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
                    // {
                    //     name: 'CME',
                    //     y: {!! json_encode($traffic_cme_ach) !!}
                    // },
                    {
                        name: 'SITAC',
                        y: {!! json_encode($traffic_sitac_ach) !!}
                    },
                    {
                        name: 'SURVEY',
                        y: {!! json_encode($traffic_survey_ach) !!}
                    },
                    {
                        name: 'DROP',
                        y: {!! json_encode($traffic_drop_ach) !!}
                    }
                ]
            }]
        });
    </script>
    <!--Target OA Win Java-->
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
            colors: ['#4e80d7']
        });
        Highcharts.chart('chartTargetOA', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Distribusi Target OA New Infra'
            },
            xAxis: {
                categories: {!! json_encode($winjava) !!},
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: '#Target OA WIN JAVA'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">Total : </td>' +
                    '<td style="padding:0"><b>{point.y:.f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'Target OA Win Java',
                data: {!! json_encode($winjava_total) !!}
            }]
        });
    </script>
    <!--Total Infra Type Win Java-->
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
            colors: ['#4e80d7', '#ff9b0a', '#bbbfc1', '#ffdd09', '#0aacff', '#4fbc05', ]
        });
        Highcharts.chart('infratype_winjava', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'TP Perfomance - New Infra'
            },
            xAxis: {
                categories: ['CMI', 'DMT', 'PTI', 'TBG'],
                crosshair: true
            },
            yAxis: {
                min: 0,
                title: {
                    text: '#Site'
                }
            },
            tooltip: {
                headerFormat: '<span style="font-size:12px"><b>{point.key}</b></span><table>',
                pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                    '<td style="padding:0"><b>{point.y:1f}</b></td></tr>',
                footerFormat: '</table>',
                shared: true,
                useHTML: true
            },
            plotOptions: {
                column: {
                    pointPadding: 0.2,
                    borderWidth: 0
                }
            },
            series: [{
                name: 'ON AIR',
                data: [{!! json_encode($cmi_oa) !!}, {!! json_encode($dmt_oa) !!}, {!! json_encode($pti_oa) !!},
                    {!! json_encode($tbg_oa) !!},
                ],
            }, {
                name: 'RFI',
                data: [{!! json_encode($cmi_rfi) !!}, {!! json_encode($dmt_rfi) !!}, {!! json_encode($pti_rfi) !!},
                    {!! json_encode($tbg_rfi) !!},
                ]

                // }, {
                //     name: 'CME',
                //     data: [{!! json_encode($cmi_cme) !!}, {!! json_encode($dmt_cme) !!}, {!! json_encode($pti_cme) !!},
                //         {!! json_encode($tbg_cme) !!},
                //     ]
            }, {
                name: 'SITAC',
                data: [{!! json_encode($cmi_sitac) !!}, {!! json_encode($dmt_sitac) !!}, {!! json_encode($pti_sitac) !!},
                    {!! json_encode($tbg_sitac) !!},
                ]
            }, {
                name: 'SURVEY',
                data: [{!! json_encode($cmi_survey) !!}, {!! json_encode($dmt_survey) !!}, {!! json_encode($pti_survey) !!},
                    {!! json_encode($tbg_survey) !!},
                ]
            }, {
                name: 'DROP',
                data: [{!! json_encode($cmi_drop) !!}, {!! json_encode($dmt_drop) !!}, {!! json_encode($pti_drop) !!},
                    {!! json_encode($tbg_drop) !!},
                ]
            }]
        });
    </script>
@endsection
