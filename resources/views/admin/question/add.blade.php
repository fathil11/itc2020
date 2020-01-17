@extends('layouts.adminLayout')

@section('title', 'Edit Peserta')

@section('content')
<h2 class="center teal-text"><b>Tambah Soal</b></h2>
<div class="card mt-3">
  <div class="card-content center">
    <div class="row">
      <form method="post" action="{{ url('admin/question/create') }}">
        @csrf
        @method('post')
        <div class="input-field col s5">
          <select id="session" name="session" required>
            <option selected disabled>Choose...</option>
              <option value="1">Penyisihan 1</option>
            <option value="2">Penyisihan 2</option>
            <option value="3">Final 1</option>
            <option value="4">Final 2</option>
          </select>
          <label for="session">Sesi</label>
        </div>
        <div class="input-field col s5">
          <input id="question" type="text" name="question" required>
          <label for="question">Pertanyaan</label>
        </div>
        <div class="input-field col s5">
          <select id="answer_key" name="answer_key" required>
            <option selected disabled>Choose...</option>
              <option value="A">A</option>
            <option value="B">B</option>
            <option value="C">C</option>
            <option value="D">D</option>
          </select>
          <label for="answer_key">Kunci Jawaban</label>
        </div>
        <div class="input-field col s5">
          <input id="option_a" type="text" name="option_a" required>
          <label for="option_a">Pilihan A</label>
        </div>
        <div class="input-field col s5">
          <input id="option_b" type="text" name="option_b" required>
          <label for="option_b">Pilihan B</label>
        </div>
        <div class="input-field col s5">
          <input id="option_c" type="text" name="option_c" value="-" required>
          <label for="option_c">Pilihan C</label>
        </div>
        <div class="input-field col s5">
          <input id="option_d" type="text" name="option_d" value="-" required>
          <label for="option_d">Pilihan D</label>
        </div>

        <div class="row">
          <button class="btn btn-large teal waves-effect waves-light btn-block-40" type="submit"
            name="action">Tambah</button>
        </div>
        <div class="row">
        <a href="{{ url('admin/question/table') }}" class="btn btn-large grey waves-effect waves-light btn-block-40" type="submit"
            name="action">Kembali</a>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection