
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('Integra SA.') }}</title>
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('material') }}/img/www.png">
    <link rel="icon" type="image/png" href="{{ asset('material') }}/img/www.png">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,600,700,800" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <!-- CSS Files -->
    <link href="{{ asset('material') }}/css/material-dashboard.css?v=2.1.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('material') }}/demo/demo.css" rel="stylesheet" />

    <link href="{{ asset('white') }}/css/white-dashboard.css?v=1.0.0" rel="stylesheet" />
    <link href="{{ asset('white') }}/css/theme.css" rel="stylesheet" />


</head>
<style>
    html {
        margin: 0;
        padding: 0;
    }
    body {
        font-family: 'Handlee', cursive;
        font-size: 13pt;
        background-color: #e8e6ef;
        padding: 10px;
        margin: 0;
    }
    h1 {
        font-size: 15pt;
        color: #20bcd5;
        text-align: center;
        padding: 18px 0 18px 0;
        margin: 0 0 10px 0;
    }
    h1 span {
        border: 4px dashed #20bcd5;
        padding: 10px;
    }
    p {
        padding: 0;
        margin: 0;
    }
    .img-circle {
        border: 3px solid white;
        border-radius: 50%;
    }
    .section {
        background-color: #fff;
        padding: 15px;
        margin-bottom: 10px;
        border-radius: 10px;
    }
    #header {
        background-image: url("https://www.sololearn.com/Uploads/header.jpg");
        background-size: cover;
    }
    #header img {
        display: block;
        width: 80px;
        height: 80px;
        margin: auto;
        position: center;
    }
    #header p {
        font-size: 25pt;
        color: #3b464c;
        padding-top: 5px;
        margin: 0;
        font-weight: bold;
        text-align: center;
    }
    .quote {
        font-size: 12pt;
        text-align: right;
        margin-top: 10px;
    }
    table {
        width: 100%;
        font-size: 11pt;
    }
    table, th, td {
        border: 2px solid #cecece;
        border-collapse: collapse;
        text-align: center;
        table-layout: fixed;
    }
    .selected {
        background-color: #f36f48;
        font-weight: bold;
        color: white;
    }
    li {
        margin-bottom: 15px;
        font-weight: bold;
    }
    progress {
        width: 70%;
        height: 20px;
        color: #3fb6b2;
        background: #efefef;
    }
    progress::-webkit-progress-bar {
        background: #efefef;
    }
    progress::-webkit-progress-value {
        background: #3fb6b2;
    }
    progress::-moz-progress-bar {
        color: #3fb6b2;
        background: #efefef;
    }
    iframe, audio {
        display: block;
        margin: 0 auto;
        border: 3px solid #3fb6b2;
    }
    hr {
        border: 0;
        height: 1px;
        background: #f36f48;
    }
    form {
        text-align: center;
        margin-top: 0;
    }
    .submit {
        background-color: #3fb6b2;
        padding: 12px 45px;
        border-radius: 5px;
        cursor: pointer;
        color: #ffffff;
        border: none;
        outline: none;
        margin: 0;
        font-weight: bold;
    }
    .submit:hover {
        background-color: #43a09d;
    }
    textarea {
        height: 100px;
    }
    input, textarea {
        margin-bottom: 10px;
        font-size: 11pt;
        padding: 15px 10px 10px;
        border: 1px solid #cecece;
        background-color: #efefef;
        color: #787575;
        border-radius: 5px;
        width: 70%;
        outline: none;
    }
    .face {
        transform: scale(0.4);
        margin: 0 auto;
        display: block;
        margin-top: -35px;
        margin-bottom: -25px;
    }
    #contacts img {
        height: 50px;
        width: 50px;
        margin-left: 7px;
        margin-right: 7px;
    }
    #contacts a {
        text-decoration: none;
    }
    #contacts img:hover {
        opacity: 0.8;
    }
    #contacts {
        text-align: center;
    }
    .copyright {
        font-size: 8pt;
        text-align: right;
        padding-bottom: 10px;
        color: grey;
    }

</style>
<body class="{{ $class ?? '' }}">


@auth()
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
    </form>
    @include('layouts.page_templates.auth')
@endauth
@guest()
    @include('layouts.page_templates.guest')
@endguest
@if (auth()->check())
    <div class="fixed-plugin">
        <div class="dropdown show-dropdown">
            <a href="#" data-toggle="dropdown">
                <i class="fa fa-cog fa-2x"> </i>
            </a>
            <ul class="dropdown-menu">
                <li class="header-title"> Filtros de color</li>
                <li class="adjustments-line">
                    <a href="javascript:void(0)" class="switch-trigger active-color">
                        <div class="badge-colors ml-auto mr-auto">
                            <span class="badge filter badge-purple " data-color="purple"></span>
                            <span class="badge filter badge-azure" data-color="azure"></span>
                            <span class="badge filter badge-green" data-color="green"></span>
                            <span class="badge filter badge-warning active" data-color="orange"></span>
                            <span class="badge filter badge-danger" data-color="danger"></span>
                            <span class="badge filter badge-rose" data-color="rose"></span>
                        </div>
                        <div class="clearfix"></div>
                    </a>
                </li>
                <li class="header-title">Imagenes</li>
                <li class="active">
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('material') }}/img/fondo.png" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('material') }}/img/sidebar-1.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('material') }}/img/sidebar-3.jpg" alt="">
                    </a>
                </li>
                <li>
                    <a class="img-holder switch-trigger" href="javascript:void(0)">
                        <img src="{{ asset('material') }}/img/sidebar-4.jpg" alt="">
                    </a>
                </li>
                <!-- <li class="header-title">Want more components?</li>
                    <li class="button-container">
                        <a href="https://www.creative-tim.com/product/material-dashboard-pro" target="_blank" class="btn btn-warning btn-block">
                          Get the pro version
                        </a>
                    </li> -->

                <li class="button-container">
                    <a href="{{ route('upgrade') }}" target="_blank" class="btn btn-danger btn-block btn-round">
                        Actualizar a PRO
                    </a>
                </li>
                <li class="button-container github-star">
                    <a class="github-button" href="https://github.com/Da1ch1/integra" data-icon="octicon-star" data-size="large" data-show-count="true" aria-label="Star ntkme/github-buttons on GitHub">Star</a>
                </li>

                <div class="section" id="contacts">
                    <a href="#">
                        <img alt="Facebook" src="https://www.sololearn.com/Uploads/icons/facebook.png"/>
                    </a>
                    <a href="#">
                        <img alt="Twitter" src="https://www.sololearn.com/Uploads/icons/twitter.png" />
                    </a>
                </div>

            </ul>
        </div>
    </div>
@endif
<!--   Core JS Files   -->
<script src="{{ asset('material') }}/js/core/jquery.min.js"></script>
<script src="{{ asset('material') }}/js/core/popper.min.js"></script>
<script src="{{ asset('material') }}/js/core/bootstrap-material-design.min.js"></script>
<script src="{{ asset('material') }}/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!-- Plugin for the momentJs  -->
<script src="{{ asset('material') }}/js/plugins/moment.min.js"></script>
<!--  Plugin for Sweet Alert -->
<script src="{{ asset('material') }}/js/plugins/sweetalert2.js"></script>
<!-- Forms Validations Plugin -->
<script src="{{ asset('material') }}/js/plugins/jquery.validate.min.js"></script>
<!-- Plugin for the Wizard, full documentation here: https://github.com/VinceG/twitter-bootstrap-wizard -->
<script src="{{ asset('material') }}/js/plugins/jquery.bootstrap-wizard.js"></script>
<!--	Plugin for Select, full documentation here: http://silviomoreto.github.io/bootstrap-select -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-selectpicker.js"></script>
<!--  Plugin for the DateTimePicker, full documentation here: https://eonasdan.github.io/bootstrap-datetimepicker/ -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-datetimepicker.min.js"></script>
<!--  DataTables.net Plugin, full documentation here: https://datatables.net/  -->
<script src="{{ asset('material') }}/js/plugins/jquery.dataTables.min.js"></script>
<!--	Plugin for Tags, full documentation here: https://github.com/bootstrap-tagsinput/bootstrap-tagsinputs  -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-tagsinput.js"></script>
<!-- Plugin for Fileupload, full documentation here: http://www.jasny.net/bootstrap/javascript/#fileinput -->
<script src="{{ asset('material') }}/js/plugins/jasny-bootstrap.min.js"></script>
<!--  Full Calendar Plugin, full documentation here: https://github.com/fullcalendar/fullcalendar    -->
<script src="{{ asset('material') }}/js/plugins/fullcalendar.min.js"></script>
<!-- Vector Map plugin, full documentation here: http://jvectormap.com/documentation/ -->
<script src="{{ asset('material') }}/js/plugins/jquery-jvectormap.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="{{ asset('material') }}/js/plugins/nouislider.min.js"></script>
<!-- Include a polyfill for ES6 Promises (optional) for IE11, UC Browser and Android browser support SweetAlert -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/core-js/2.4.1/core.js"></script>
<!-- Library for adding dinamically elements -->
<script src="{{ asset('material') }}/js/plugins/arrive.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?AIzaSyB41DRUbKWJHPxaFjMAwdrzWzbVKartNGg&callback=initMap&v=weekly"></script>
<!-- Chartist JS -->
<script src="{{ asset('material') }}/js/plugins/chartist.min.js"></script>
<!--  Notifications Plugin    -->
<script src="{{ asset('material') }}/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
<script src="{{ asset('material') }}/js/material-dashboard.js?v=2.1.1" type="text/javascript"></script>
<!-- Material Dashboard DEMO methods, don't include it in your project! -->
<script src="{{ asset('material') }}/demo/demo.js"></script>
<script src="{{ asset('material') }}/js/settings.js"></script>

<!--Charts-->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>


@stack('js')
</body>
</html>
