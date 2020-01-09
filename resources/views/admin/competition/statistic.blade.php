<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

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
                    <th scope="col">@sortablelink('id')</th>
                    <th scope="col">@sortablelink('name')</th>
                    <th scope="col">@sortablelink('school')</th>
                    <th scope="col">@sortablelink('absent')</th>
                    <th scope="col">@sortablelink('point_1')</th>
                    <th scope="col">@sortablelink('point_2')</th>
                    <th scope="col">@sortablelink('point_3')</th>
                    <th scope="col">@sortablelink('point_4')</th>
                    <th scope="col">@sortablelink('status')</th>
                  </tr>
                </thead>
                <tbody>
                    @if ($statistics->count())
                        @foreach ($statistics as $key => $statistic)
                        <tr>
                            <td scope="row">{{ $statistic->id }}</td>
                            <td scope="row">{{ $statistic->name }}</td>
                            <td scope="row">{{ $statistic->school }}</td>
                            <td scope="row">{{ $statistic->absent }}</td>
                            <td scope="row">{{ $statistic->point_1 }}</td>
                            <td scope="row">{{ $statistic->point_2 }}</td>
                            <td scope="row">{{ $statistic->point_3 }}</td>
                            <td scope="row">{{ $statistic->point_4 }}</td>
                            <td scope="row">{{ $statistic->status }}</td>
                          </tr>
                        @endforeach
                    @endif
                </tbody>
            </table>
            {!! $statistics->appends(\Request::except('page'))->render() !!}
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