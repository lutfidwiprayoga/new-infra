<div id="sidebar" class="active">
    <div class="sidebar-wrapper active">
        <div class="sidebar-header">
            <div class="d-flex justify-content-between">
                <div class="logo">
                    <a href="/pivot"><img src="{{ asset('admin') }}/assets/images/logo/logo.png" alt="Logo"
                            srcset=""></a>
                </div>
                <div class="toggler">
                    <a href="#" class="sidebar-hide d-xl-none d-block"><i class="bi bi-x bi-middle"></i></a>
                </div>
            </div>
        </div>
        <div class="sidebar-menu">
            <ul class="menu">
                <li class="sidebar-item {{ request()->is('pivot*') ? 'active' : '' }}">
                    <a href="{{ route('pivot.index') }}" class='sidebar-link '>
                        <i class="fa fa-chart-bar"></i>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('winjava*') ? 'active' : '' }}">
                    <a href="{{ route('winjava.index') }}" class='sidebar-link '>
                        <i class="fa fa-chart-bar"></i>
                        <span>Win Java</span>
                    </a>
                </li>
                <li class="sidebar-item  {{ request()->is('mapnewinfra*') ? 'active' : '' }}">
                    <a href="/mapnewinfra" class='sidebar-link '>
                        <i class="fa fa-map-marked-alt"></i>
                        <span>Branch Distribution</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('sitelist*') ? 'active' : '' }}">
                    <a href="{{ route('sitelist.index') }}" class='sidebar-link '>
                        <i class="bi bi-table"></i>
                        <span>Sitelist</span>
                    </a>
                </li>
                <li class="sidebar-item {{ request()->is('alertcenter*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-exclamation-triangle"></i>
                        <span>Alert Center</span>
                    </a>
                    <ul class="submenu {{ request()->is('alertcenter*') ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->is('alertcenter/close') ? 'active' : '' }}">
                            <a href="{{ route('alertcenter.close') }}">Close SLA</a>
                        </li>
                        <li class="submenu-item {{ request()->is('alertcenter/out') ? 'active' : '' }} ">
                            <a href="{{ route('alertcenter.out') }}">OUT SLA</a>
                        </li>
                    </ul>
                </li>
                <li class="sidebar-item {{ request()->is('targetbulan*') ? 'active' : '' }} has-sub">
                    <a href="#" class='sidebar-link'>
                        <i class="fa fa-calendar-check"></i>
                        <span>Target Juni</span>
                    </a>
                    <ul class="submenu {{ request()->is('targetbulan*') ? 'active' : '' }}">
                        <li class="submenu-item {{ request()->is('targetbulan/oa') ? 'active' : '' }}">
                            <a href="{{ route('targetbulan.oa') }}">Target OA</a>
                        </li>
                        <li class="submenu-item {{ request()->is('targetbulan/rfi') ? 'active' : '' }} ">
                            <a href="{{ route('targetbulan.rfi') }}">Target RFI</a>
                        </li>
                    </ul>
                </li>
            </ul>
            <div class="container">
                <div id="data-calendar" class="data-calendar"></div>
            </div>
        </div>
        <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
    </div>
</div>
<!--========= Start Calendar ==================-->
<style>
    .data-calendar {
        position: absolute;
        max-width: 100%;
        line-height: 30px;
        background: #fff;
        border-radius: 4px;
        overflow: hidden;
    }

    .datepicker-inline {
        width: 100%;
    }

    .datepicker-inline .table-condensed {
        width: 250px;
    }

    .datepicker-inline .table-condensed .prev,
    .datepicker-inline .table-condensed .datepicker-switch,
    .datepicker-inline .table-condensed .next {
        visibility: visible;
        background-color: #f5365c;
        color: #fff;
    }

    .datepicker-inline .table-condensed .prev:hover,
    .datepicker-inline .table-condensed .datepicker-switch:hover,
    .datepicker-inline .table-condensed .next:hover {
        background-color: #f5365c;
        color: #fff;
    }

    .datepicker-inline .table-condensed tr td.today,
    .datepicker-inline .table-condensed tr td.today:hover,
    .datepicker-inline .table-condensed tr td.today.disabled,
    .datepicker-inline .table-condensed tr td.today.disabled:hover {
        border-radius: 50%;
        background-color: #f5365c;
        background-image: -moz-linear-gradient(to bottom, #f5365c, #f5365c);
        background-image: -ms-linear-gradient(to bottom, #f5365c, #f5365c);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#f5365c), to(#f5365c));
        background-image: -webkit-linear-gradient(to bottom, #f5365c, #f5365c);
        background-image: -o-linear-gradient(to bottom, #f5365c, #f5365c);
        /* background-image: linear-gradient(to bottom, #fdd49a, #fdf59a); */
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#f5365c', endColorstr='#f5365c', GradientType=0);
        border-color: #f5365c #f5365c #f5365c;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
    }

    .datepicker-inline .table-condensed tr td.active,
    .datepicker-inline .table-condensed tr td.active:hover,
    .datepicker-inline .table-condensed tr td.active.disabled,
    .datepicker-inline .table-condensed tr td.active.disabled:hover {
        border-radius: 50%;
        background-color: #000;
        background-image: -moz-linear-gradient(to bottom, #000, #000);
        background-image: -ms-linear-gradient(to bottom, #000, #000);
        background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#000), to(#000));
        background-image: -webkit-linear-gradient(to bottom, #000, #000);
        background-image: -o-linear-gradient(to bottom, #000, #000);
        /* background-image: linear-gradient(to bottom, #fdd49a, #fdf59a); */
        background-repeat: repeat-x;
        filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#000', endColorstr='#000', GradientType=0);
        border-color: #000 #000 #000;
        border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
        filter: progid:DXImageTransform.Microsoft.gradient(enabled=false);
        color: #fff;
    }
</style>
<script type="text/javascript">
    $('#data-calendar').datepicker({
        calendarWeeks: true,
        autoclose: true,
        todayHighlight: true
    });
</script>
<!--========= End Calendar ==================-->
