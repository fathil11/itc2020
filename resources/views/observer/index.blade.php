@extends('layouts.app')

@section('content')
  @if (isset($status))
      <h3 class="text-center">Sesi : {{ $status->session }}</h3>
  @endif
  <form action="" method="post" class="col-6 mx-auto my-5">
    @csrf
    @method('put')
    <div class="form-group row justify-content-center">
      <label for="participants_id" class="col-sm-2 col-form-label">Mengawasi</label>
      <div class="col-sm-10">
          <input type="text" class="form-control" id="participants_id" placeholder="Masukkan Nomor Peserta '1,2,3,4'" name="participants_id">
      </div>
    </div>
    <button type="submit" class="btn btn-primary" style="width:125px">Input</button>
  </form>
@endsection