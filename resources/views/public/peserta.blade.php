@extends('layouts.app')

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
                <th scope="col">@sortablelink('id', 'No')</th>
                <th scope="col">@sortablelink('name', 'Nama')</th>
                <th scope="col">@sortablelink('school', 'Sekolah')</th>
                <th scope="col">@sortablelink('point_1', 'Point 1')</th>
                <th scope="col">@sortablelink('point_2', 'Point 2')</th>
                <th scope="col">@sortablelink('point_3', 'Point 3')</th>
                <th scope="col">@sortablelink('point_4', 'Point 4')</th>
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
@endsection