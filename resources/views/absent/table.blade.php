@extends('layouts.adminLayout')
@section('title', 'Absensi')
@section('content')
<h2 class="center teal-text"><b>Absensi Peserta</b></h2>
<a href="{{ url('admin/participant/create') }}" class="btn waves-effect waves-light right" type="submit"><i
    class="material-icons left">add_circle</i>Tambah
  Peserta</a>
<br>
<div class="card mt-3">
  <div class="card-content">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Sekolah</th>
          <th>S-1</th>
          <th>S-2</th>
          <th>S-3</th>
          <th>S-4</th>
          <th>Status</th>
          <th>Absen</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($participants as $key=>$participant)
        <tr>
          <td>{{ $participant->id }}</td>
          <td>{{ $participant->name }}</td>
          <td>{{ $participant->school }}</td>
          <td>{{ $participant->point_1 }}</td>
          <td>{{ $participant->point_2 }}</td>
          <td>{{ $participant->point_3 }}</td>
          <td>{{ $participant->point_4 }}</td>
          <td>{{ $participant->status }}</td>
          <td>{{ $participant->absent }}</td>
          <td>
            <form action="{{ url('admin/participant/edit/'.$participant->id) }}" method="post" class="d-inline">
              @csrf
              <button class="btn waves-effect amber darken-2 waves-light tooltipped" data-position="top"
                data-tooltip="Update Peserta" type="submit" name="action">
                <i class="material-icons right">create</i>
              </button>
            </form>
            <form action="{{ url ('admin/participant/table/'.$participant->id) }}" method="post"
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
      </tbody>
    </table>
  </div>
</div>
@endsection

@section('js')
@if (session('status'))
<script>
  M.toast({html: 'Berhasil', classes: 'rounded'});
</script>
@endif
@endsection