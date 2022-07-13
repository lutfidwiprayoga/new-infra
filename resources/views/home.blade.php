@extends('layouts.app')
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>Mapping Branch NEW INFRA JATIM</h3>
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Branch Distribution</a></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section class="section">
            <div class="container-fluid mt--7">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <!--====== Mapping Peta JATIM =======-->
                                <div id="map"></div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Lamongan = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Surabaya = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Sidoarjo = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Jember = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Malang = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card">
                            <div class="card-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th colspan="3" class="text-center">New Infra Madiun = 10</th>
                                        </tr>
                                        <tr>
                                            <th>Milestone</th>
                                            <th>Jumlah</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>ON AIR</td>
                                            <td>5 (50%)</td>
                                        </tr>
                                        <tr>
                                            <td>RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>NY RFI</td>
                                            <td>2</td>
                                        </tr>
                                        <tr>
                                            <td>DROP/HOLD</td>
                                            <td>1</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div class="row">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-body">
                                <!--======== TOTAL BRANCH ===== -->
                                <div class="dataTable-container">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th colspan="8">Simple Progress</th>
                                            </tr>
                                            <tr>
                                                <th>BRANCH</th>
                                                <th>ON AIR</th>
                                                <th>RFI</th>
                                                <th>NY RFI</th>
                                                <th>DROP /HOLD</th>
                                                <th>Total</th>
                                                <th>Ach Total</th>
                                                <th>Ach Per Branch</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Jember</td>
                                                <td>{{ $jember_oa }}</td>
                                                <td>{{ $jember_rfi }}</td>
                                                <td>{{ $jember_ny }}</td>
                                                <td>{{ $jember_drop }}</td>
                                                <td>{{ $jember_grand }}</td>
                                                <td>{{ $jember_oa }}%</td>
                                                <td>{{ $jember_oa_ach }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Lamongan</td>
                                                <td>{{ $lamongan_oa }}</td>
                                                <td>{{ $lamongan_rfi }}</td>
                                                <td>{{ $lamongan_ny }}</td>
                                                <td>{{ $lamongan_drop }}</td>
                                                <td>{{ $lamongan_grand }}</td>
                                                <td>{{ $lamongan_ach }}%</td>
                                                <td>{{ $lamongan_oa_ach }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Madiun</td>
                                                <td>{{ $madiun_oa }}</td>
                                                <td>{{ $madiun_rfi }}</td>
                                                <td>{{ $madiun_ny }}</td>
                                                <td>{{ $madiun_drop }}</td>
                                                <td>{{ $madiun_grand }}</td>
                                                <td>{{ $madiun_ach }}%</td>
                                                <td>{{ $madiun_oa_ach }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Malang</td>
                                                <td>{{ $malang_oa }}</td>
                                                <td>{{ $malang_rfi }}</td>
                                                <td>{{ $malang_ny }}</td>
                                                <td>{{ $malang_drop }}</td>
                                                <td>{{ $malang_grand }}</td>
                                                <td>{{ $malang_ach }}%</td>
                                                <td>{{ $malang_oa_ach }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Sidoarjo</td>
                                                <td>{{ $sidoarjo_oa }}</td>
                                                <td>{{ $sidoarjo_rfi }}</td>
                                                <td>{{ $sidoarjo_ny }}</td>
                                                <td>{{ $sidoarjo_drop }}</td>
                                                <td>{{ $sidoarjo_grand }}</td>
                                                <td>{{ $sidoarjo_ach }}%</td>
                                                <td>{{ $sidoarjo_oa_ach }}%</td>
                                            </tr>
                                            <tr>
                                                <td>Surabaya</td>
                                                <td>{{ $surabaya_oa }}</td>
                                                <td>{{ $surabaya_rfi }}</td>
                                                <td>{{ $surabaya_ny }}</td>
                                                <td>{{ $surabaya_drop }}</td>
                                                <td>{{ $surabaya_grand }}</td>
                                                <td>{{ $surabaya_ach }}%</td>
                                                <td>{{ $surabaya_oa_ach }}%</td>
                                            </tr>
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>Total</th>
                                                <th>{{ $grandtotal_oa }}</th>
                                                <th>{{ $grandtotal_rfi }}</th>
                                                <th>{{ $grandtotal_ny }}</th>
                                                <th>{{ $grandtotal_drop }}</th>
                                                <th>{{ $grandtotal_grand }}</th>
                                                <th colspan="2">{{ $total_ach }}%</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <div id="chartsimple_progress"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <!--========= Bar Chart ===========-->
@section('javascript')
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script>
        Highcharts.chart('chartsimple_progress', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'New Infra - BRANCH DISTRIBUTION'
            },
            xAxis: {
                categories: [
                    'Jember : {!! json_encode($jember_oa_ach) !!}%',
                    'Lamongan : {!! json_encode($lamongan_oa_ach) !!}%',
                    'Madiun : {!! json_encode($madiun_oa_ach) !!}%',
                    'Malang : {!! json_encode($malang_oa_ach) !!}%',
                    'Sidoarjo : {!! json_encode($sidoarjo_oa_ach) !!}%',
                    'Surabaya : {!! json_encode($surabaya_oa_ach) !!}%'
                ],
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
                data: [{!! json_encode($jember_oa) !!}, {!! json_encode($lamongan_oa) !!}, {!! json_encode($madiun_oa) !!},
                    {!! json_encode($malang_oa) !!}, {!! json_encode($sidoarjo_oa) !!}, {!! json_encode($surabaya_oa) !!}
                ],
            }, {
                name: 'RFI',
                data: [{!! json_encode($jember_rfi) !!}, {!! json_encode($lamongan_rfi) !!}, {!! json_encode($madiun_rfi) !!},
                    {!! json_encode($malang_rfi) !!}, {!! json_encode($sidoarjo_rfi) !!}, {!! json_encode($surabaya_rfi) !!}
                ]

            }, {
                name: 'NY RFI',
                data: [{!! json_encode($jember_ny) !!}, {!! json_encode($lamongan_ny) !!}, {!! json_encode($madiun_ny) !!},
                    {!! json_encode($malang_ny) !!}, {!! json_encode($sidoarjo_ny) !!}, {!! json_encode($surabaya_ny) !!}
                ]

            }, {
                name: 'DROP/HOLD',
                data: [{!! json_encode($jember_drop) !!}, {!! json_encode($lamongan_drop) !!}, {!! json_encode($madiun_drop) !!},
                    {!! json_encode($malang_drop) !!}, {!! json_encode($sidoarjo_drop) !!}, {!! json_encode($surabaya_drop) !!}
                ]

            }]
        });
    </script>
@endsection
<style>
    .info {
        padding: 6px 8px;
        font: 14px/16px Arial, Helvetica, sans-serif;
        background: white;
        background: rgba(255, 255, 255, 0.8);
        box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
        border-radius: 5px;
    }

    .info h4 {
        margin: 0 0 5px;
        color: #777;
    }

    .legend {
        line-height: 18px;
        color: #555;
    }

    .legend i {
        width: 18px;
        height: 18px;
        float: left;
        margin-right: 8px;
        opacity: 0.7;
    }
</style>
@php
$conn = mysqli_connect('localhost', 'root', '', 'tracking_infra');
$result = mysqli_query($conn, 'SELECT name, longitude, latitude FROM cities');
if (!$result) {
    echo mysqli_error($conn);
}
$k = -1;
$simpan_id[0] = 'a';

while ($row = mysqli_fetch_array($result)) {
    $name = $row[0];
    $longitude = $row[1];
    $latitude = $row[2];

    $k = $k + 1;
    $simpan_name[$k] = $name;
    $simpan_longitude[$k] = $longitude;
    $simpan_latitude[$k] = $latitude;
}
@endphp
<script>
    var array_provinsi_PHP_JS = <?php echo json_encode($simpan_name); ?>;
    var array_longitude_PHP_JS = <?php echo json_encode($simpan_longitude); ?>;
    var array_latitude_PHP_JS = <?php echo json_encode($simpan_latitude); ?>;
</script>
<script src="geojson_jatim.js"></script>
<script>
    var map = L.map('map').setView([-7.71382145288484, 112.60514479860993], 8);
    var gl = L.mapboxGL({
        attribution: '<a href="https://www.maptiler.com/copyright/" target="_blank">&copy; MapTiler</a> <a href="https://www.openstreetmap.org/copyright" target="_blank">&copy; OpenStreetMap contributors</a>',
        accessToken: 'not-needed',
        style: 'https://api.maptiler.com/maps/streets/style.json?key=1h7e1Z9S76PGy92uF3c5'
    }).addTo(map);

    var leafletIcon = L.icon({
        iconUrl: 'http://statkomat.com/pin.png',
        //shadowUrl: 'leaf-shadow.png',
        iconSize: [13, 13], // size of the icon
        shadowSize: [10, 10], // size of the shadow
        iconAnchor: [10, 10], // point of the icon which will correspond to marker's location
        shadowAnchor: [10, 10], // the same for the shadow
        popupAnchor: [10, 10] // point from which the popup should open relative to the iconAnchor
    });

    for (i = 0; i < 36; i++) {

        L.marker([array_latitude_PHP_JS[i], array_longitude_PHP_JS[i]], {
                icon: leafletIcon
            })
            .bindPopup(array_provinsi_PHP_JS[i].concat("<br>Longitude: ", array_longitude_PHP_JS[i], "<br>Latitude: ",
                array_latitude_PHP_JS[i]))
            .openPopup().addTo(map);
    }

    function getColor(d) {
        return d == 'BANYUWANGI' ? 'red' :
            d == 'JEMBER' ? 'red' :
            d == 'SITUBONDO' ? 'red' :
            d == 'BONDOWOSO' ? 'red' :
            d == 'LUMAJANG' ? 'red' :
            d == 'PROBOLINGGO' ? 'red' :
            d == 'PROBOLINGGO' ? 'red' :

            d == 'SIDOARJO' ? 'green' :
            d == 'PASURUAN' ? 'green' :
            d == 'MOJOKERTO' ? 'green' :
            d == 'MOJOKERTO' ? 'green' :

            d == 'SURABAYA' ? '#edb161' :
            d == 'BANGKALAN' ? '#edb161' :
            d == 'SAMPANG' ? '#edb161' :
            d == 'SUMENEP' ? '#edb161' :
            d == 'PAMEKASAN' ? '#edb161' :

            d == 'LAMONGAN' ? '#8945cc' :
            d == 'GRESIK' ? '#8945cc' :
            d == 'TUBAN' ? '#8945cc' :
            d == 'BOJONEGORO' ? '#8945cc' :
            d == 'NGAWI' ? '#8945cc' :

            d == 'MALANG' ? '#5574e6' :
            d == 'MALANG' ? '#5574e6' :
            d == 'BLITAR' ? '#5574e6' :
            d == 'BLITAR' ? '#5574e6' :
            d == 'BATU' ? '#5574e6' :
            d == 'TULUNGAGUNG' ? '#5574e6' :

            d == 'MADIUN' ? '#d48735' :
            d == 'MADIUN' ? '#d48735' :
            d == 'MAGETAN' ? '#d48735' :
            d == 'PONOROGO' ? '#d48735' :
            d == 'PACITAN' ? '#d48735' :
            d == 'KEDIRI' ? '#d48735' :
            d == 'JOMBANG' ? '#d48735' :
            d == 'NGANJUK' ? '#d48735' :
            d == 'TRENGGALEK' ? '#d48735' :

            '#F2DBA7';
    }

    function style(feature) {
        return {
            fillColor: getColor(feature.properties.KABKOT),
            weight: 1,
            opacity: 1,
            color: 'white',
            dashArray: '0',
            fillOpacity: 1
        };
    }

    function highlightFeature(e) {
        var layer = e.target;

        layer.setStyle({
            weight: 5,
            color: '#666',
            dashArray: '',
            fillOpacity: 0.7
        });

        if (!L.Browser.ie && !L.Browser.opera && !L.Browser.edge) {
            layer.bringToFront();
        }
        info.update(layer.feature.properties);
    }

    function resetHighlight(e) {
        geojson_jatim.resetStyle(e.target);

        info.update();
    }


    function zoomToFeature(e) {
        map.fitBounds(e.target.getBounds());
    }

    function onEachFeature(feature, layer) {
        layer.on({
            mouseover: highlightFeature,
            mouseout: resetHighlight,
            click: zoomToFeature
        });
    }
    geojson_jatim = L.geoJson(geojson_jatim, {
        style: style,
        onEachFeature: onEachFeature
    }).addTo(map);

    var info = L.control();

    info.onAdd = function(map) {
        this._div = L.DomUtil.create('div', 'info'); // create a div with a class "info"
        this.update();
        return this._div;
    };

    // method that we will use to update the control based on feature properties passed
    info.update = function(props) {
        // this._div.innerHTML = '<b>Kota: ' + (props ? '' + props.KABKOT + ' </b>' : '');
        this._div.innerHTML = '<b>Kota/Kabupaten: ' + (props ? '' + props.KABKOT + '</b><br/><b>Branch: ' + props
            .BRANCH +
            '</b><br><br><b>Total: ' + props.TOTAL + '</b><br><b>- ON AIR: ' + props.ONAIR +
            '</b><br><b>- RFI: ' +
            props.RFI + '</b><br><b>- NY RFI: ' + props.NYRFI + '</b><br><b>- DROP/HOLD: ' + props.DROP +
            '</b>' :
            '');
    };

    info.addTo(map);
</script>
@endsection
