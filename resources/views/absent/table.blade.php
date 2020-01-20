<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen,projection" />
    @yield('customStyle')
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Absensi</title>
</head>

<body class="grey lighten-4">
    <nav>
        <div class="nav-wrapper teal">
            <a href="{{ url('/admin') }}" class="brand-logo ml-3">ITC</a>
            <ul class="right hide-on-med-and-down mr-3">
                <li>
                    <a href="{{ url('logout') }}">Logout</a>
                </li>
            </ul>
        </div>
    </nav>

    <ul id="competition_controll" class="dropdown-content">
        <li><a href="{{ url('/admin/competition/statistic') }}">Statistik</a></li>
        <li><a href="{{ url('/admin/competition/session-panel') }}">Sesi</a></li>
        <li><a href="{{ url('/admin/competition/eliminate') }}">Eliminasi</a></li>
    </ul>

    <ul id="competition_controlll" class="dropdown-content">
        <li><a href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                {{ __('Logout') }}</a>

            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </li>
    </ul>

    <div class="container mt-4">
        <h2 class="center teal-text"><b>Absensi Peserta</b></h2>
        <br>
        <div class="card mt-3">
        <div class="card-content">
            <table class="responsive-table centered highlight">
            <thead>
                <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Sekolah</th>
                <th>Absen</th>
                <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($participants as $key=>$participant)
                <tr>
                <td>{{ $participant->id }}</td>
                <td>{{ $participant->name }}</td>
                <td>{{ $participant->school }}</td>
                <td>
                    @if ($participant->absent != null)
                        <i class="material-icons green-text">check</i>
                    @else
                        <i class="material-icons red-text">clear</i>
                    @endif
                </td>
                <td>
                    <form action="{{ url('absent/check/'.$participant->id) }}" method="post" class="d-inline">
                    @csrf
                    <button class="btn waves-effect amber darken-2 waves-light tooltipped" data-position="top"
                        data-tooltip="HADIR" type="submit" name="action">
                        <i class="material-icons right">assignment</i>
                    </button>
                    </form>
                    <form action="{{ url ('absent/uncheck/'.$participant->id) }}" method="post"
                    class="d-inline">
                    @csrf
                    @method('put')
                    <button class="btn waves-effect red waves-light tooltipped" data-position="top"
                        data-tooltip="TIDAK HADIR" type="submit" name="action">
                        <i class="material-icons right">assignment_late</i>
                    </button>
                    </form>
                </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        M.AutoInit()
    </script>
    @if (session('status'))
    <script>
      M.toast({html: 'Berhasil', classes: 'rounded'});
    </script>
    @endif
</body>
</html>