@extends('layouts.app')

@section('content')
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
                </tr>
              </thead>
              <tbody>
                @foreach ($participants as $participant)
                  <tr>
                    <td scope="row">{{ $participant->id }}</td>
                    <td scope="row">{{ $participant->name }}</td>
                    <td scope="row">{{ $participant->school }}</td>
                    <td scope="row">{{ $participant->absent }}</td>
                    <td scope="row">{{ $participant->point_1 }}</td>
                    <td scope="row">{{ $participant->point_2 }}</td>
                    <td scope="row">{{ $participant->point_3 }}</td>
                    <td scope="row">{{ $participant->point_4 }}</td>
                    <td scope="row">{{ $participant->status }}</td>
                  </tr>
                  @endforeach
              </tbody>
          </table>
          <a href="{{ url('observer/competition/answer/'.$question->id) }}" class="btn btn-primary my-3">Input Jawaban</a>
        </div>
    </div>
</div>
@endsection