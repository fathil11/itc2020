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
                <th scope="col">@sortablelink('session', 'Sesi')</th>
                <th scope="col">@sortablelink('question', 'Pertanyaan')</th>
                <th scope="col">@sortablelink('option_a', 'Pilihan A')</th>
                <th scope="col">@sortablelink('option_b', 'Pilihan B')</th>
                <th scope="col">@sortablelink('option_c', 'Pilihan C')</th>
                <th scope="col">@sortablelink('option_d', 'Pilihan D')</th>
                <th scope="col">@sortablelink('answer_key', 'Kunci Jawaban')</th>
              </tr>
            </thead>
            <tbody>
                @if ($statistics->count())
                    @foreach ($statistics as $key => $statistic)
                    <tr>
                        <td scope="row">{{ $statistic->id }}</td>
                        <td scope="row">{{ $statistic->session }}</td>
                        <td scope="row">{{ $statistic->question }}</td>
                        <td scope="row">{{ $statistic->option_a }}</td>
                        <td scope="row">{{ $statistic->option_b }}</td>
                        <td scope="row">{{ $statistic->option_c }}</td>
                        <td scope="row">{{ $statistic->option_d }}</td>
                        <td scope="row">{{ $statistic->answer_key }}</td>
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