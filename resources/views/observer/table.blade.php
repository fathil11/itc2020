
@extends('layouts.app')

@section('content')
<div class="container my-5">
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <h3>Data Peserta</h3>
    </div>
  </div>
  <div class="row justify-content-center">
    <div class="col-sm-10">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th scope="col">No</th>
            <th scope="col">Nama</th>
            <th scope="col">Sekolah</th>
            <th scope="col">Status</th>
            <th scope="col">Aksi</th>
          </tr>
        </thead>
        <tbody>
          @if (isset($participants))
          @foreach ($participants as $participant)
          <tr>
            <td scope="row">{{ $participant->id }}</td>
            <td scope="row">{{ $participant->name }}</td>
            <td scope="row">{{ $participant->school }}</td>
            <td scope="row">{{ $participant->status }}</td>
            <td>
                <form action="{{ url('observer/edit/'.$participant->id) }}" method="post" class="d-inline">
                    @csrf
                    <button class="btn waves-effect amber darken-2 waves-light tooltipped" data-position="top"
                      data-tooltip="Update Peserta" type="submit" name="action">
                      <i class="material-icons right">update</i>
                    </button>
                  </form>
                  <form action="{{ url ('observer/table/'.$participant->id) }}" method="post"
                    class="d-inline">
                    @csrf
                    @method('delete')
                    <button class="btn waves-effect red waves-light tooltipped" data-position="top"
                      data-tooltip="Delete Peserta" type="submit" name="action">
                      <i class="material-icons right">delete</i>
                    </button>
                  </form>
            </td>
          </tr>
          @endforeach
          @endif
        </tbody>
      </table>
      @if (isset($participant))
      <a href="{{ url('observer/competition/answer/') }}" class="btn btn-primary my-3">Input Jawaban</a>
      @endif
    </div>
  </div>
</div>
@endsection