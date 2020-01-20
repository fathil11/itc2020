<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>Question Detail</title>
  </head>
  <body>
    <div class="container my-5">
        <div class="row mx-auto min-vh-80">
            <div class="col-md-12 mx-auto">
                @if ($question->session == 1)
                    <h4>Sesi Penyisihan 1</h4>
                    <h5>Soal {{ $question->id }}</h5>
                @elseif ($question->session == 2)
                    <h4>Sesi Penyisihan 2</h4>
                    <h5>Soal {{ $question->id-30 }}</h5>
                @elseif ($question->session == 3)
                    <h4>Sesi Final 1</h4>
                    <h5>Soal {{ $question->id-50 }}</h5>
                @elseif ($question->session == 4)
                    <h4>Sesi Final 2</h4>
                    <h5>Soal {{ $question->id-60 }}</h5>
                @else    
                @endif
                @if ($question->session == 2)
                    @php
                        $splitQuestion = $question->question;
                        $premis = explode ("|", $splitQuestion);
                    @endphp
                    <h1>{{ $premis[0] }}</h1>
                    <h1>{{ $premis[1] }}</h1>
                @else
                    <h1>{{ $question->question }}</h1>
                @endif
                @if ($question->session == 1)
                    <h2>A. {{ $question->option_a }}</h2>
                    <h2>B. {{ $question->option_b }}</h2>
                @elseif ($question->session == 2)
                    <h2>A. {{ $question->option_a }}</h2>
                    <h2>B. {{ $question->option_b }}</h2>
                    <h2>C. {{ $question->option_c }}</h2>
                    <h2>D. {{ $question->option_d }}</h2>
                @elseif ($question->session == 3)
                    <h2>A. {{ $question->option_a }}</h2>
                    <h2>B. {{ $question->option_b }}</h2>
                    <h2>C. {{ $question->option_c }}</h2>
                @elseif ($question->session == 4)
                @else    
                @endif
            </div>
        </div>
    </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>