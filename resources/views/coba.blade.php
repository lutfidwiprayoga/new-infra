{{-- <html>

<head>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.js"></script>
    <script src="https://cdn.maptiler.com/mapbox-gl-leaflet/latest/leaflet-mapbox-gl.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.0.3/leaflet.css" />
    <link rel="stylesheet" href="https://cdn.maptiler.com/mapbox-gl-js/v1.5.1/mapbox-gl.css" />
</head>
<style>
    #map {
        height: 600px;
        width: 1400px;

    }

</style>

<body>
    <center>
        <div class="card">
            <div class="card-body">
                <div id="map"></div>
            </div>
        </div>
    </center>
</body>

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

<?php
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

?>
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
        this._div.innerHTML = '<b>Kota: ' + (props ?
            '' + props.KABKOT + ' </b>' :
            '');
    };

    info.addTo(map);
</script>

</html> --}}
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Essential JS 2 Calendar control</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Typescript UI Controls" />
    <meta name="author" content="Syncfusion" />
    {{-- <link href="{{ asset('admin') }}/bootstrap-datepicker/css/bootstrap-datepicker.min.css" rel="stylesheet" />
    <script src="{{ asset('admin') }}/bootstrap-datepicker/js/bootstrap-datepicker.min.js"></script> --}}
    <link href="{{ asset('admin') }}/calendar/css/mobiscroll.javascript.min.css" rel="stylesheet" />
    <script src="{{ asset('admin') }}/calendar/js/mobiscroll.javascript.min.js"></script>
    <!-- include the jQuery UI style sheet -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css"
        rel="stylesheet">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<body>
    {{-- <div id="demo-quarter-year-view"></div>
    <div class="calendar">
        <div class="header">
            <a data-action="prev-month" href="javascript:void(0)" title="Previous Month"><i></i></a>
            <div class="text" data-render="month-year"></div>
            <a data-action="next-month" href="javascript:void(0)" title="Next Month"><i></i></a>
        </div>
        <div class="months" data-flow="left">
            <div class="month month-a">
                <div class="render render-a"></div>
            </div>
            <div class="month month-b">
                <div class="render render-b"></div>
            </div>
        </div>
    </div> --}}
    <div id="data-calendar"></div>
    <script type="text/javascript">
        $('#data-calendar').datepicker({
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true
        });
    </script>
</body>

</html>

{{-- <script type="text/javascript">
    $(function() {
        $('#calendar-jajal').datetimepicker({
            calendarWeeks: true,
            autoclose: true,
            todayHighlight: true
        });
        $('#datetimepicker').datetimepicker();
    });
</script> --}}
<style>
    .mbsc-datepicker .quarter-year-header-picker .mbsc-segmented {
        max-width: 280px;
        margin: 0 auto;
    }

    .quarter-year-header-picker {
        flex: 1 0 auto;
    }

    #demo-quarter-year-view {
        width: 400px;
        font-size: 100%;
        margin: 50px auto 0;
        perspective: 1000px;
        cursor: default;
        position: relative
    }

    body {
        margin: 0;
        color: #444;
        background-color: #98c2c2;
        font: 300 18px/18px Roboto, sans-serif;
        transition: background .4s ease-in-out 0s;
    }

    *,
    :after,
    :before {
        box-sizing: border-box
    }

    .pull-left {
        float: left
    }

    .pull-right {
        float: right
    }

    .clearfix:after,
    .clearfix:before {
        content: '';
        display: table
    }

    .clearfix:after {
        clear: both;
        display: block
    }

    .calendar {
        width: 300px;
        font-size: 100%;
        margin: 50px auto 0;
        perspective: 1000px;
        cursor: default;
        position: relative
    }

    .calendar .header {
        height: 100px;
        position: relative;
        color: #fff
    }

    .calendar .header .text {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #308ff0;
        padding: 15px;
        transform: rotateX(90deg);
        transform-origin: bottom;
        backface-visibility: hidden;
        transition: .4s ease-in-out 0s;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, .19), 0 8px 17px 0 rgba(0, 0, 0, .2);
        opacity: 0
    }

    .calendar .header .text>span {
        text-align: center;
        padding: 26px;
        display: block
    }

    .calendar .header.active .text {
        transform: rotateX(0deg);
        opacity: 1
    }

    .months {
        width: 100%;
        height: 280px;
        position: relative
    }

    .months .hr {
        height: 1px;
        margin: 15px 0;
        background: #ccc
    }

    .month {
        padding: 15px;
        width: inherit;
        height: inherit;
        background: #fff;
        position: absolute;
        backface-visibility: hidden;
        transition: all .4s ease-in-out 0s;
        box-shadow: 0 6px 20px 0 rgba(0, 0, 0, .19), 0 8px 17px 0 rgba(0, 0, 0, .2)
    }

    .months[data-flow="left"] .month {
        transform: rotateY(-180deg)
    }

    .months[data-flow="right"] .month {
        transform: rotateY(180deg)
    }

    .table {
        width: 100%;
        font-size: 10px;
        font-weight: 400;
        display: table
    }

    .table .row {
        display: table-row
    }

    .table .row.head {
        color: #308ff0;
        text-transform: uppercase
    }

    .table .row .cell {
        width: 14.28%;
        padding: 5px;
        text-align: center;
        display: table-cell
    }

    .table .row .cell.disable {
        color: #ccc
    }

    .table .row .cell span {
        display: block;
        width: 28px;
        height: 28px;
        line-height: 28px;
        transition: color, background .4s ease-in-out 0s
    }

    .table .row .cell.active span {
        color: #fff;
        background-color: #308ff0
    }

    .months .month[data-active="true"] {
        transform: rotateY(0)
    }

    .header [data-action] {
        color: inherit;
        position: absolute;
        top: 50%;
        margin-top: -20px;
        width: 40px;
        height: 40px;
        z-index: 1;
        opacity: 0;
        transition: all .4s ease-in-out 0s
    }

    .header [data-action]>i {
        width: 20px;
        height: 20px;
        display: block;
        position: absolute;
        left: 50%;
        top: 50%;
        margin-top: -10px;
        margin-left: -10px
    }

    .header [data-action]>i:before,
    .header [data-action]>i:after {
        top: 50%;
        margin-top: -1px;
        content: '';
        position: absolute;
        height: 2px;
        width: 20px;
        border-top: 2px solid;
        border-radius: 2px
    }

    .header [data-action*="prev"] {
        left: 15px
    }

    .header [data-action*="next"] {
        right: 15px
    }

    .header [data-action*="prev"]>i:before,
    .header [data-action*="prev"]>i:after {
        left: 0
    }

    .header [data-action*="prev"]>i:before {
        top: 3px;
        transform: rotate(-45deg)
    }

    .header [data-action*="prev"]>i:after {
        top: auto;
        bottom: 3px;
        transform: rotate(45deg)
    }

    .header [data-action*="next"]>i:before,
    .header [data-action*="next"]>i:after {
        right: 0
    }

    .header [data-action*="next"]>i:before {
        top: auto;
        bottom: 3px;
        transform: rotate(-45deg)
    }

    .header [data-action*="next"]>i:after {
        top: 3px;
        transform: rotate(45deg)
    }

    .header.active [data-action] {
        opacity: 1
    }

</style>
{{-- <script>
    mobiscroll.setOptions({
        theme: 'ios',
        themeVariant: 'light'
    });

    var selectedDate = new Date();

    var myCalendar = mobiscroll.datepicker('#demo-quarter-year-view', {
        controls: ['calendar'],
        display: 'inline',
        calendarType: 'month',
        calendarSize: 1,
        showWeekNumbers: true,
        renderCalendarHeader: function() {
            return '<div mbsc-calendar-nav></div>' +
                '<div class="quarter-year-header-picker">' +
                '<label><input mbsc-segmented type="radio" name="view" value="q1" class="md-quarter-year-view-change">Q1</label>' +
                '<label><input mbsc-segmented type="radio" name="view" value="q2" class="md-quarter-year-view-change">Q2</label>' +
                '<label><input mbsc-segmented type="radio" name="view" value="q3" class="md-quarter-year-view-change">Q3</label>' +
                '<label><input mbsc-segmented type="radio" name="view" value="q4" class="md-quarter-year-view-change">Q4</label>' +
                '<label><input mbsc-segmented type="radio" name="view" value="year" class="md-quarter-year-view-change">Year</label></div>' +
                '<div mbsc-calendar-prev></div>' +
                '<div mbsc-calendar-next></div>';
        },
        onPageChange: function(event, inst) {
            selectedDate = event.firstDay;
            setType(mobiscroll.getInst(document.querySelectorAll(
                '.md-quarter-year-view-change[value="year"]')[0]).checked);
        }
    });

    function setType(yearView) {
        var type = '';
        if (yearView) {
            type = 'year';
        } else {
            var month = selectedDate.getMonth();
            if (month < 3) {
                type = 'q1';
            } else if (month < 6) {
                type = 'q2';
            } else if (month < 9) {
                type = 'q3';
            } else {
                type = 'q4';
            }
        }
        mobiscroll.getInst(document.querySelectorAll('.md-quarter-year-view-change[value=' + type + ']')[0]).checked =
            true;
    }

    setTimeout(function() {
        document.querySelectorAll('.md-quarter-year-view-change').forEach(function(elm) {
            elm.addEventListener('change', function(ev) {
                var year = selectedDate.getFullYear();
                var type;
                var date;

                switch (ev.target.value) {
                    case 'q1':
                        type = 'month';
                        date = new Date(year, 0, 1);
                        break;
                    case 'q2':
                        type = 'month';
                        date = new Date(year, 3, 1);
                        break;
                    case 'q3':
                        type = 'month';
                        date = new Date(year, 6, 1);
                        break;
                    case 'q4':
                        type = 'month';
                        date = new Date(year, 9, 1);
                        break;
                    case 'year':
                        type = 'year';
                        date = new Date(year, selectedDate.getMonth(), 1);
                        break;
                }
                myCalendar.setOptions({
                    calendarType: type
                });
                myCalendar.navigate(date);
            });
        });
        setType();
    }, 1000);
</script> --}}
{{-- <script>
    var Calendar = function(t) {
        this.divId = t.RenderID ? t.RenderID : '[data-render="calendar"]', this.DaysOfWeek = t.DaysOfWeek ? t
            .DaysOfWeek : ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], this.Months = t.Months ? t
            .Months : ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"];
        var e = new Date;
        this.CurrentMonth = e.getMonth(), this.CurrentYear = e.getFullYear();
        var r = t.Format;
        this.f = "string" == typeof r ? r.charAt(0).toUpperCase() : "M"
    };
    Calendar.prototype.nextMonth = function() {
        11 == this.CurrentMonth ? (this.CurrentMonth = 0, this.CurrentYear = this.CurrentYear + 1) : this
            .CurrentMonth = this.CurrentMonth + 1, this.divId = '[data-active="false"] .render', this.showCurrent()
    }, Calendar.prototype.prevMonth = function() {
        0 == this.CurrentMonth ? (this.CurrentMonth = 11, this.CurrentYear = this.CurrentYear - 1) : this
            .CurrentMonth = this.CurrentMonth - 1, this.divId = '[data-active="false"] .render', this.showCurrent()
    }, Calendar.prototype.previousYear = function() {
        this.CurrentYear = this.CurrentYear - 1, this.showCurrent()
    }, Calendar.prototype.nextYear = function() {
        this.CurrentYear = this.CurrentYear + 1, this.showCurrent()
    }, Calendar.prototype.showCurrent = function() {
        this.Calendar(this.CurrentYear, this.CurrentMonth)
    }, Calendar.prototype.checkActive = function() {
        1 == document.querySelector(".months").getAttribute("class").includes("active") ? document.querySelector(
            ".months").setAttribute("class", "months") : document.querySelector(".months").setAttribute("class",
            "months active"), "true" == document.querySelector(".month-a").getAttribute("data-active") ? (
            document.querySelector(".month-a").setAttribute("data-active", !1), document.querySelector(
                ".month-b").setAttribute("data-active", !0)) : (document.querySelector(".month-a").setAttribute(
            "data-active", !0), document.querySelector(".month-b").setAttribute("data-active", !1)), setTimeout(
            function() {
                document.querySelector(".calendar .header").setAttribute("class", "header active")
            }, 200), document.querySelector("body").setAttribute("data-theme", this.Months[document
            .querySelector('[data-active="true"] .render').getAttribute("data-month")].toLowerCase())
    }, Calendar.prototype.Calendar = function(t, e) {
        "number" == typeof t && (this.CurrentYear = t), "number" == typeof t && (this.CurrentMonth = e);
        var r = (new Date).getDate(),
            n = (new Date).getMonth(),
            a = (new Date).getFullYear(),
            o = new Date(t, e, 1).getDay(),
            i = new Date(t, e + 1, 0).getDate(),
            u = 0 == e ? new Date(t - 1, 11, 0).getDate() : new Date(t, e, 0).getDate(),
            s = "<span>" + this.Months[e] + " &nbsp; " + t + "</span>",
            d = '<div class="table">';
        d += '<div class="row head">';
        for (var c = 0; c < 7; c++) d += '<div class="cell">' + this.DaysOfWeek[c] + "</div>";
        d += "</div>";
        for (var h, l = dm = "M" == this.f ? 1 : 0 == o ? -5 : 2, v = (c = 0, 0); v < 6; v++) {
            d += '<div class="row">';
            for (var m = 0; m < 7; m++) {
                if ((h = c + dm - o) < 1) d += '<div class="cell disable">' + (u - o + l++) + "</div>";
                else if (h > i) d += '<div class="cell disable">' + l++ + "</div>";
                else {
                    d += '<div class="cell' + (r == h && this.CurrentMonth == n && this.CurrentYear == a ?
                        " active" : "") + '"><span>' + h + "</span></div>", l = 1
                }
                c % 7 == 6 && h >= i && (v = 10), c++
            }
            d += "</div>"
        }
        d += "</div>", document.querySelector('[data-render="month-year"]').innerHTML = s, document.querySelector(
            this.divId).innerHTML = d, document.querySelector(this.divId).setAttribute("data-date", this.Months[
            e] + " - " + t), document.querySelector(this.divId).setAttribute("data-month", e)
    }, window.onload = function() {
        var t = new Calendar({
            RenderID: ".render-a",
            Format: "M"
        });
        t.showCurrent(), t.checkActive();
        var e = document.querySelectorAll(".header [data-action]");
        for (i = 0; i < e.length; i++) e[i].onclick = function() {
            if (document.querySelector(".calendar .header").setAttribute("class", "header"), "true" == document
                .querySelector(".months").getAttribute("data-loading")) return document.querySelector(
                ".calendar .header").setAttribute("class", "header active"), !1;
            var e;
            document.querySelector(".months").setAttribute("data-loading", "true"), this.getAttribute(
                    "data-action").includes("prev") ? (t.prevMonth(), e = "left") : (t.nextMonth(), e =
                    "right"), t.checkActive(), document.querySelector(".months").setAttribute("data-flow", e),
                document.querySelector('.month[data-active="true"]').addEventListener("webkitTransitionEnd",
                    function() {
                        document.querySelector(".months").removeAttribute("data-loading")
                    }), document.querySelector('.month[data-active="true"]').addEventListener("transitionend",
                    function() {
                        document.querySelector(".months").removeAttribute("data-loading")
                    })
        }
    };
</script> --}}
