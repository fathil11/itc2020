<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Observer List</title>
  </head>
  <body>
    <div class="container my-5">
      <h3>Data Pengawas</h3>
      <div class="row">
          <div class="col">
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Role</th>
                    <th scope="col">Token</th>
                    <th scope="col" colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($observers as $observer)
                    <tr>
                      <td scope="row">{{ $loop->iteration }}</td>
                      <td scope="row">{{ $observer->name }}</td>
                      <td scope="row">{{ $observer->email }}</td>
                      <td scope="row">{{ $observer->role }}</td>
                      <td scope="row">{{ $observer->remember_token }}</td>
                      <td>
                        <form action="{{ url ('admin/participant/table/'.$observer->id) }}" method="post" class="d-inline">
                          @csrf
                          @method('delete')
                          <button type="submit" class="badge badge-danger">Delete</button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
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