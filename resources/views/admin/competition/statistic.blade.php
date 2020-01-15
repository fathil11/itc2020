
@extends('layouts.navbaradmin')

@section('customstyle')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<style>
  th a{
      color: white !important;
      text-decoration: none !important;
  }
  th a:hover{
      color: white !important;
      text-decoration: none !important;
  }
</style>
@endsection

@section('content')
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
                <th scope="col">@sortablelink('point_1')</th>
                <th scope="col">@sortablelink('point_2')</th>
                <th scope="col">@sortablelink('point_3')</th>
                <th scope="col">@sortablelink('point_4')</th>
                <th scope="col">@sortablelink('status')</th>
                <th scope="col" class="a" colspan="2">Update Status</th>
              </tr>
            </thead>
            <tbody>
                @if ($statistics->count())
                    @foreach ($statistics as $key => $statistic)
                    <tr>
                        <td scope="row">{{ $statistic->id }}</td>
                        <td scope="row">{{ $statistic->name }}</td>
                        <td scope="row">{{ $statistic->school }}</td>
                        <td scope="row">{{ $statistic->point_1 }}</td>
                        <td scope="row">{{ $statistic->point_2 }}</td>
                        <td scope="row">{{ $statistic->point_3 }}</td>
                        <td scope="row">{{ $statistic->point_4 }}</td>
                        <td scope="row">{{ $statistic->status }}</td>
                        <td>
                          <form action="{{ url('admin/competition/statistic/'.$statistic->id) }}" method="post" class="d-inline-flex mx-3">
                            @csrf
                            @method('put')
                            <button type="submit" class="badge badge-success">+</button>
                          </form>
                          <form action="{{ url('admin/competition/statistic/'.$statistic->id) }}" method="post" class="d-inline-flex mx-3">
                            @csrf
                            @method('patch')
                            <button type="submit" class="badge badge-danger">-</button>
                          </form>
                        </td>
                      </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
        {!! $statistics->appends(\Request::except('page'))->render() !!}
      </div>
    </div>
  </div>
@endsection