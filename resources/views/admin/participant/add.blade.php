@extends('layouts.adminLayout')

@section('title', 'Edit Peserta')

@section('content')
<h2 class="center teal-text"><b>Tambah Peserta</b></h2>
<div class="card mt-3">
  <div class="card-content center">
    <div class="row">
      <form method="post" action="{{ url('admin/participant/create') }}">
        @csrf
        @method('post')
        <div class="input-field col s5">
          <input id="name" type="text" name="name">
          <label for="name">Nama</label>
        </div>
        <div class="input-field col s5">
          <input id="school" type="text" name="school">
          <label for="school">Asal Sekolah</label>
        </div>

        <div class="row">
          <button class="btn btn-large teal waves-effect waves-light btn-block-40" type="submit"
            name="action">Tambah</button>
        </div>
        <div class="row">
        <a href="{{ url('admin/participant/table') }}" class="btn btn-large grey waves-effect waves-light btn-block-40" type="submit"
            name="action">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection