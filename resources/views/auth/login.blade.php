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
    <title>@yield('title')</title>
</head>

<body class="grey lighten-4">
    <div class="container mt-4">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div class="card mt-5">
                <div class="card-content">
                    <h3 class="teal-text">ITC 2020</h3>
                    <br>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="email" type="email" class="validate" name="email">
                        <label for="email">Email</label>
                      </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="password" type="password" class="validate" name="password">
                          <label for="password">Password</label>
                        </div>
                    </div>
                      <div class="row">
                        <button type="submit" class="btn btn-large btn-block">
                            {{ __('Login') }}
                        </button>
                      </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <script type="text/javascript" src="{{ asset('js/materialize.js') }}"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script>
        M.AutoInit()
    </script>
</body>

</html>
