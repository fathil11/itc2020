<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/observer-custom.css') }}" media="screen,projection" />
    @yield('customStyle')

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>
</head>

<body class="grey lighten-4">

    <nav>
        <a href="#" data-target="slide-out" class="sidenav-trigger"><i class="material-icons">menu</i></a>
        <div class="nav-wrapper">
            <a href="#" class="brand-logo center">@yield('title')</a>
        </div>
    </nav>

    <ul id="slide-out" class="sidenav">
        <li>
            <div class="user-view">
                <div class="background">
                    <img src="{{ asset('img/bg.jpg') }}">
                </div>
                <a href="#user"><img class="circle"
                        src="http://mahasiswa.dinus.ac.id/images/foto/A/A11/{{ $detail[1] }}/{{ $detail[0] }}.jpg"></a>
                <a href="#name"><span class="white-text name">{{ $detail[2]->name }}</span></a>
                <a href="#email"><span class="white-text email">{{ $detail[2]->email }}</span></a>
            </div>
        </li>
        <li class="{{ (request()->is('observer')) ? 'active' : '' }}"><a class="waves-effect" href="{{ url('observer') }}"><i
                    class="material-icons">home</i>Home</a></li>
        <li>
            <div class="divider"></div>
        </li>
        <div class="row">
            <ul class="tabs">
                <li class="tab col s3"><a class="" href="#participant-menu"><i
                            class="material-icons custom-place">person</i></a>
                </li>
                <li class="tab col s3"><a class="" href="#correction-menu"><i
                            class="material-icons custom-place">assignment</i></a>
                </li>
            </ul>
            <div id="participant-menu">
                <li><a class="subheader">Peserta</a></li>
                <li class="{{ (request()->is('admin/participant/add')) ? 'active' : '' }}"><a class="waves-effect"
                        href="{{ url('observer/participant/add') }}"><i
                            class="material-icons">add_circle_outline</i>Input
                        Peserta</a></li>
                <li class="{{ (request()->is('admin/participant/table')) ? 'active' : '' }}"><a class="waves-effect"
                        href="{{ url('observer/participant/table') }}"><i class="material-icons">clear_all</i>Tabel Peserta</a>
                </li>
            </div>

            <div id="correction-menu">
                <li><a class="subheader">Koreksi</a></li>
            <li class=""><a class="waves-effect" href="{{ url('observer/competition') }}"><i class="material-icons">remove_red_eye</i>Koreksi
                        Jawaban</a></li>
            </div>
        </div>
        <div class="divider"></div>
        <li class=""><a class="waves-effect" href="{{ url('logout') }}"><i
                    class="material-icons">power_settings_new</i>Logout</a>
        </li>
    </ul>

    <ul id="competition_controll" class="dropdown-content">
        <li><a href="#!">Statistik</a></li>
        <li><a href="#!">Sesi</a></li>
        <li><a href="#!">Eliminasi</a></li>
        <li><a href="#!">Kick</a></li>
    </ul>

    <div class="container mt-2">
        @yield('content')
    </div>


    <!-- Modal Structure -->
    <div id="msg" class="modal">
        <div class="modal-content center">
            <i class="material-icons large red-text">info_outline</i>
            <h4 class="red-text"><b>Belum menginputkan peserta</b></h4>
            <h5>mau input peserta sekarang ?</h5>
        </div>
        <div class="modal-footer">
            <a href="{{ url('observer/participant/add') }}"
                class="modal-close waves-effect waves-green btn-flat">Iya</a>
            <a href="#" class="modal-close waves-effect waves-green btn-flat">Tidak</a>
        </div>
    </div>

    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(function () {
            M.AutoInit()
            $('#participant_number').on('input propertychange paste', function () {
                var input = $('#participant_number').val()
                var count = input.length
                var result = $.trim(input).split(',')
                var r_count = result.length
                if (count < 1) {
                    $('#info').text("")
                } else {
                    $('#info').text("anda mengawasi " + r_count + " orang")
                }
            })

        });
    </script>
    @yield('js')
</body>
@if (Session::get('status') == 1)
<script>
    $(document).ready(function () {
        M.AutoInit()
        var Modalelem = document.querySelector('#msg')
        var instance = M.Modal.init(Modalelem)
        instance.open()
    });
</script>
@php
session()->pull('status', 'default');
@endphp
@endif


</html>
