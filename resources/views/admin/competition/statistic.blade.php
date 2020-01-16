@extends('layouts.adminLayout')
@section('title', 'Statistik')
@section('content')
<h2 class="center teal-text"><b>Peserta</b></h2>
<div class="card mt-3">
  <div class="card-content">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
          <th>Rank</th>
          <th>No Peserta</th>
          <th>Nama</th>
          <th>S-1</th>
          <th>S-2</th>
          <th>S-3</th>
          <th>S-4</th>
          <th>Status</th>
          <th>Aksi</th>
        </tr>
      </thead>

      <tbody>
        <tr>
          @foreach ($participants as $key => $participant)
          <td>{{ $key+1 }}</td>
          <td>{{ $participant->id }}</td>
          <td>{{ $participant->name }}</td>
          <td>{{ $participant->point_1 }}</td>
          <td>{{ $participant->point_2 }}</td>
          <td>{{ $participant->point_3 }}</td>
          <td>{{ $participant->point_4 }}</td>
          <td>{{ $participant->status }}</td>
          <td>
            <div class="row">
              <form action="{{ url('admin/competition/statistic/add-point/'.$participant->id) }}" method="post"
                class="d-inline">
                @csrf
                @method('put')
                <button class="btn waves-effect green darken-1 waves-light tooltipped" data-position="top"
                  data-tooltip="Lolos" type="submit" name="action"><i class="material-icons">done</i>
                </button>
              </form>

              <form action="{{ url('admin/competition/statistic/min-point/'.$participant->id) }}" method="post"
                class="d-inline">
                @csrf
                @method('put')
                <button class="btn waves-effect red darken-1 waves-light tooltipped" data-position="top"
                  data-tooltip="Tidak Lolos" type="submit" name="action">
                  <i class="material-icons">highlight_off</i>
                </button>
              </form>

              <button class="btn waves-effect grey darken-1 waves-light tooltipped" data-position="top"
                data-tooltip="Kick Peserta" type="submit" name="action">
                <i class="material-icons">do_not_disturb_alt</i>
              </button>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
</div>
@endsection