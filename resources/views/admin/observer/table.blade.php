@extends('layouts.adminLayout')
@section('title', 'Pengawas')
@section('content')
<h2 class="center teal-text"><b>Pengawas</b></h2>
<div class="card mt-3">
  <div class="card-content">
    <table class="responsive-table centered highlight">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Mengawasi</th>
        </tr>
      </thead>

      <tbody>
        @foreach ($observers as $key => $observer)
        <tr>
          <td>{{ $observer->id }}</td>
          <td>{{ $observer->name }}</td>
          <td>{{ $observer->email }}</td>

          <td>
            @php
            $watching = App\ObserverParticipant::where('observer_id', $observer->id)->get();
            $watchingTemp = array();
            foreach ($watching as $key => $value) {
            $watchingTemp[] = $value->participant_id;
            }

            $watcingString = implode(' | ', $watchingTemp);
            @endphp

            {{ $watcingString }}
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection