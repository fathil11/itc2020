<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Students</title>
  </head>
  <body>
    <div class="container">
        <h3>Form Tambah Soal</h3>
        <div class="row">
            <div class="col-8">
                <form method="post" action="{{ url('admin/question/table') }}" class="my-5">
                    @csrf
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                          <label class="input-group-text" for="session">Sesi</label>
                        </div>
                        <select class="custom-select" id="session" name="session">
                          <option selected>Choose...</option>
                          <option value="1">Penyisihan 1</option>
                          <option value="2">Penyisihan 2</option>
                          <option value="3">Final 1</option>
                          <option value="4">Final 2</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="question">Pertanyaan</label>
                        <input type="text" class="form-control" id="question" placeholder="Masukkan Pertanyaan" name="question" value="{{ old('question') }}">
                    </div>
                    <div class="form-group">
                        <label for="answer_key">Kunci Jawaban</label>
                        <input type="text" class="form-control" id="answer_key" placeholder="Masukkan Kunci Jawaban" name="answer_key" value="{{ old('answer_key') }}">
                    </div>
                    <div class="form-group">
                        <label for="option_a">Pilihan A</label>
                        <input type="text" class="form-control" id="option_a" placeholder="Masukkan Pilihan A" name="option_a">
                    </div>
                    <div class="form-group">
                        <label for="option_b">Pilihan B</label>
                        <input type="text" class="form-control" id="option_b" placeholder="Masukkan Pilihan B" name="option_b">
                    </div>
                    <div class="form-group">
                        <label for="option_c">Pilihan C</label>
                        <input type="text" class="form-control" id="option_c" placeholder="Masukkan Pilihan C" name="option_c" value="-">
                    </div>
                    <div class="form-group">
                        <label for="option_d">Pilihan D</label>
                        <input type="text" class="form-control" id="option_d" placeholder="Masukkan Pilihan D" name="option_d" value="-">
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data</button>
                </form>
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