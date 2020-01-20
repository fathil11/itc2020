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
    <title>Register</title>
</head>

<body class="grey lighten-4">
    <nav>
        <div class="nav-wrapper teal">
          <a href="#" class="brand-logo"><img src="{{ asset('img/anmlogo.gif') }}" height="40" class="mt-1" alt="" srcset=""></a>
          <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
          <ul id="nav-mobile" class="right hide-on-med-and-down">
            <li><a href="{{ route('login') }}">Login</a></li>
            <li><a href="{{ route('register') }}">Register</a></li>
          </ul>
        </div>
      </nav>

      <ul class="sidenav" id="mobile-demo">
          <div class="background">
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          </div>
      </ul>
            
    <div class="container mt-4">
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="card mt-5">
                <div class="card-content">
                    <h3 class="teal-text">ITC 2020</h3>
                    <br>
                    <div class="row">
                      <div class="input-field col s12">
                        <input id="name" type="text" class="validate" name="name">
                        <label for="name">Name</label>
                      </div>
                    </div>
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
                        <div class="input-field col s12">
                          <input id="password-confirm" type="password" class="validate" name="password_confirmation">
                          <label for="password-confirm">Confirm Password</label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="input-field col s12">
                          <input id="key-access" type="password" class="validate" name="key-access">
                          <label for="key-access">Key Access</label>
                        </div>
                    </div>
                      <div class="row">
                        <button type="submit" class="btn btn-large btn-block">
                            {{ __('Register') }}
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
{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Register') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="key-access" class="col-md-4 col-form-label text-md-right">Key Access</label>

                            <div class="col-md-6">
                                <input id="key-access" type="password" class="form-control" name="key-access" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}
