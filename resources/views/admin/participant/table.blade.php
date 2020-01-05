<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Participant List</title>
  </head>
  <body>
    <div class="container my-5">
      <h3>Data Peserta</h3>
      <div class="row">
          <div class="col">
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">School</th>
                    <th scope="col">Absent</th>
                    <th scope="col">Point 1</th>
                    <th scope="col">Point 2</th>
                    <th scope="col">Point 3</th>
                    <th scope="col">Point 4</th>
                    <th scope="col">Status</th>
                    <th scope="col" colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($participants as $participant)
                    <tr>
                      <td scope="row">{{ $loop->iteration }}</td>
                      <td scope="row">{{ $participant->name }}</td>
                      <td scope="row">{{ $participant->school }}</td>
                      <td scope="row">{{ $participant->absent }}</td>
                      <td scope="row">{{ $participant->point_1 }}</td>
                      <td scope="row">{{ $participant->point_2 }}</td>
                      <td scope="row">{{ $participant->point_3 }}</td>
                      <td scope="row">{{ $participant->point_4 }}</td>
                      <td scope="row">{{ $participant->status }}</td>
                      <td>
                        <form action="{{ url('admin/participant/'.$participant->id.'/edit') }}" method="post" class="d-inline">
                          @csrf
                          <button type="submit" class="badge badge-success">Edit</button>
                        </form>
                        <form action="{{ url ('admin/participant/table/'.$participant->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button type="submit" class="badge badge-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
              <a href="{{ url('admin/participant/add') }}" class="btn btn-primary my-3">Tambah Peserta</a>
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