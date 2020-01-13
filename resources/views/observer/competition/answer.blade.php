<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Fill the answer's</title>
  </head>
  <body>
        <div class="container my-3">
            <form method="post" action="{{ url('observer/competition/answer/'.$question->id) }}">
                @method('patch')
                @csrf
                @if ($question->session == 1)
                    <h4>Penyisihan 1</h4>
                    <h5>Soal {{ $question->id }}</h5>
                @elseif ($question->session == 2)
                    <h4>Penyisihan 2</h4>
                    <h5>Soal {{ $question->id }}</h5>
                @elseif ($question->session == 3)
                    <h4>Final 1</h4>
                    <h5>Soal {{ $question->id }}</h5>
                @elseif ($question->session == 4)
                    <h4>Final 2</h4>
                    <h5>Soal {{ $question->id }}</h5>
                @else    
                @endif
            @foreach ($participants as $participant)
            @if ($participant->status == $question->session)
            <h3>{{ $participant->name }}</h3>
            @if ($question->session == 1)
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="answer">Jawaban</label>
                    </div>
                <select class="custom-select" id="answer" name="answer[{{ $participant->id }}]">
                    <option disabled>Choose...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="Z">Tidak Menjawab</option>
                </select>
                </div>
            @elseif ($question->session == 2)
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="answer">Jawaban</label>
                    </div>
                <select class="custom-select" id="answer" name="answer[{{ $participant->id }}]">
                    <option disabled>Choose...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                    <option value="D">D</option>
                    <option value="Z">Tidak Menjawab</option>
                </select>
                </div>
            @elseif ($question->session == 3)
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="answer">Jawaban</label>
                    </div>
                <select class="custom-select" id="answer" name="answer[{{ $participant->id }}]">
                    <option disabled>Choose...</option>
                    <option value="A">A</option>
                    <option value="B">B</option>
                    <option value="C">C</option>
                </select>
                </div>
            @elseif ($question->session == 4)
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                    <label class="input-group-text" for="answer">Jawaban</label>
                    </div>
                <select class="custom-select" id="answer" name="answer[{{ $participant->id }}]">
                    <option disabled>Choose...</option>
                    <option value="5">+5</option>
                    <option value="4">+4</option>
                    <option value="3">+3</option>
                    <option value="2">+2</option>
                    <option value="1">+1</option>
                    <option value="0">0 (Tidak Menjawab)</option>
                </select>
                </div>
            @else    
            @endif
            @else
            @endif
            @endforeach
            <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>