@extends('layouts.navbaradmin')

@section('content')
    <div class="container my-5">
      <h3>Data Pengawas</h3>
      <div class="row">
          <div class="col">
            <table class="table">
              <thead class="thead-dark">
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Id</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Email</th>
                    <th scope="col">Status</th>
                    <th scope="col">Token</th>
                    <th scope="col" colspan="2" class="text-center">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($observers as $observer)
                    <tr>
                      <td scope="row">{{ $loop->iteration }}</td>
                      <td scope="row">{{ $observer->id }}</td>
                      <td scope="row">{{ $observer->name }}</td>
                      <td scope="row">{{ $observer->email }}</td>
                      <td scope="row">{{ $observer->role }}</td>
                      <td scope="row">{{ $observer->remember_token }}</td>
                      <td>
                        <form action="{{ url ('admin/observer/table/'.$observer->id) }}" method="post" class="d-inline">
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
@endsection