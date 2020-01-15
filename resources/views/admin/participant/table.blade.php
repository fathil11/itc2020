@extends('layouts.navbaradmin')

@section('content')
    <div class="container my-5">
      <h3>Data Peserta</h3>
      <div class="row">
        <div class="col">
          <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Sekolah</th>
                <th scope="col">Absen</th>
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
                  <td scope="row">{{ $participant->id }}</td>
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
@endsection