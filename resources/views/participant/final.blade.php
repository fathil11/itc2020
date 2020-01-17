<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <main>
        <div class="container">
            <div class="min-vh-100 row d-flex align-items-center flex-column justify-content-center">
                @if ($question->session == 3)
                    <div class="col-12 sticky-top">
                        <div class="d-flex">
                            <div class="align-items-start flex-column bd-highlight mr-auto">
                                    <h4>Final 1</h4>
                                    <h5>Soal {{ $question->id-50 }}</h5>
                            </div>
                            <div class="align-items-end flex-column bd-highlight mb-5">  
                                <h4 class="text-center">{{ $participant->name }}</h4>
                                <h5 class="text-center">{{ $participant->id }}</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <h1>{{ $question->id-50 }}. {{ $question->question }}</h1>
                        <h2>A. {{ $question->option_a }}</h2>
                        <h2>B. {{ $question->option_b }}</h2>
                        <h2>C. {{ $question->option_c }}</h2>
                    </div>
                    <div class="col-6">
                        <h6 class="text-center">Score:</h6>
                        <h1 class="display-1 text-center mb-3">{{ $participant->point_3 }}</h1>
                            @if (session('counter'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                {{ session('counter') }}
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            @endif
                        <form method="post" action="{{ url('participant/final/') }}" class="text-right">
                            @method('patch')
                            @csrf
                            <div class="form-group row justify-content-center">
                                <label for="bet" class="col-sm-2 col-form-label">Taruhan</label>
                                <div class="col-sm-10">
                                    <input type="number" class="form-control" id="bet" placeholder="Masukkan Taruhan" name="bet" min="0" step="1">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-sm-2 col-form-label" for="answer">Jawaban</label>
                                <div class="col-sm-10">
                                    <select class="custom-select" id="answer" name="answer">
                                        <option selected disabled>Pilih</option>
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                @elseif  ($question->session != 3)
                    <h1>Sesi Telah Berakhir</h1>
                @endif
            </div>
        </div>
    </main>
    </div>
</body>
</html>