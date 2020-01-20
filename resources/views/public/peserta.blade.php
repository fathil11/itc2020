<!DOCTYPE html>
<html>

<head>
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css') }}" media="screen,projection" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/custom.css') }}" media="screen,projection" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <style>
      th a {
        color: #212121 !important;
      }
    </style>
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Peserta</title>
</head>

<body class="grey lighten-4">
    <nav>
        <div class="nav-wrapper teal">
            <a href="{{ url('/admin') }}" class="brand-logo ml-3">ITC</a>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="center teal-text"><b>Tabel Peserta</b></h2>
        <br>
        <div class="card mt-3">
        <div class="card-content">
          <table class="responsive-table centered highlight">
            <thead>
              <tr>
                <th>@sortablelink('id', 'No Peserta')</th>
                <th>@sortablelink('name', 'Nama')</th>
                <th>@sortablelink('point_1', 'S-1')</th>
                <th>@sortablelink('point_2', 'S-2')</th>
                <th>@sortablelink('point_3', 'S-3')</th>
                <th>@sortablelink('point_4', 'S-4')</th>
                <th>@sortablelink('status', 'Status')</th>
              </tr>
            </thead>
      
            <tbody>
              @foreach ($statistics as $key => $participant)
              <tr
                class="@if ($participant->status == -1) red accent-1 @elseif($participant->status == $current->session) teal lighten-3 @else yellow @endif">
                <td>{{ $participant->id }}</td>
                <td>{{ $participant->name }}</td>
                <td>{{ $participant->point_1 }}</td>
                <td>{{ $participant->point_2 }}</td>
                <td>{{ $participant->point_3 }}</td>
                <td>{{ $participant->point_4 }}</td>
                <td>{{ $participant->status }}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
          <div class="mt-3">
            {{$statistics->links()}}
          </div>
        </div>
        </div>
    </div>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        M.AutoInit()
    </script>
</body>
</html>