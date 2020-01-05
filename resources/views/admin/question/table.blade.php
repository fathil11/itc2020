<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Question List</title>
  </head>
  <body>
        <div class="container my-5">
            <h3>Data Soal</h3>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Soal</th>
                                <th scope="col">Kunci Jawaban</th>
                                <th scope="col">Pilihan A</th>
                                <th scope="col">Pilihan B</th>
                                <th scope="col">Pilihan C</th>
                                <th scope="col">Pilihan D</th>
                                <th scope="col" colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $question->session }}</td>
                                <td scope="row">{{ $question->question }}</td>
                                <td scope="row">{{ $question->answer_key }}</td>
                                <td scope="row">{{ $question->option_a }}</td>
                                <td scope="row">{{ $question->option_b }}</td>
                                <td scope="row">{{ $question->option_c }}</td>
                                <td scope="row">{{ $question->option_d }}</td>
                                <td>
                                    <form action="{{ url('admin/question/'.$question->id.'/edit') }}" method="post" class="d-inline">
                                        @csrf
                                        <button type="submit" class="badge badge-success">Edit</button>
                                    </form>
                                    {{-- url('admin/question/table', ['id' => $question->id]) --}}
                                    <form action="{{ url ('admin/question/table/'.$question->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>
                                </td>
                                <td><a href="{{ url ('admin/question/table/'.$question->id) }}" class="badge badge-primary">Show</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('admin/question/add') }}" class="btn btn-primary my-3">Tambah Soal</a>
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