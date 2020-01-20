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
      <div class="bg-wave-head">
        <a href="#" class="brand-logo position-absolute float-left pt-4 pl-5"><img src="{{ asset('img/anmlogo.gif') }}" height="50" alt="" srcset=""></a>
        <div class="container py-5">
            <div class="row mx-auto min-vh-80">
                <div class="col-md-12 mx-auto">
                    <div class="text-right">
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
                    </div>
                    <br>
                    <br>
                    @if ($question->session == 2)
                        @php
                            $splitQuestion = $question->question;
                            $premis = explode ("|", $splitQuestion);
                        @endphp
                        <h2>{{ $premis[0] }}</h2>
                        <h2>{{ $premis[1] }}</h2>
                    @else
                        <h2>{{ $question->question }}</h2>
                    @endif
                    <br>
                    @if ($question->session == 1)
                        <h3>A. {{ $question->option_a }}</h3>
                        <h3>B. {{ $question->option_b }}</h3>
                    @elseif ($question->session == 2)
                        <h3>A. {{ $question->option_a }}</h3>
                        <h3>B. {{ $question->option_b }}</h3>
                        <h3>C. {{ $question->option_c }}</h3>
                        <h3>D. {{ $question->option_d }}</h3>
                    @elseif ($question->session == 3)
                        <h3>A. {{ $question->option_a }}</h3>
                        <h3>B. {{ $question->option_b }}</h3>
                        <h3>C. {{ $question->option_c }}</h3>
                    @elseif ($question->session == 4)
                    @else    
                    @endif
                </div>
            </div>
        </div>
        <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 680 264.68" height="150px" class="float-right fix-bt"><defs><style>.cls-1,.cls-2{fill:#2196f3;}.cls-2{opacity:0.7;}</style></defs><title>image2</title><path class="cls-1" d="M1920,1080V908c-36-28.15-86.11-56.67-145-55-100.25,2.85-135.44,90.64-279,161-121.63,59.61-225.88,66-215,66Z" transform="translate(-1240 -815.32)"/><path class="cls-2" d="M1920,1080V871c-72.21-51-128.92-58.3-168-55-113.16,9.56-128.49,111.89-293,185-97.65,43.39-211.13,76.71-211.13,76.71-4.87,1.42-7.65,2.21-7.87,2.29Z" transform="translate(-1240 -815.32)"/></svg>
      </div>
        

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>