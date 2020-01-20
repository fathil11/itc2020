@extends('layouts.adminLayout')

@section('title', 'Edit Soal')

@section('content')
<h2 class="center teal-text"><b>Edit Soal</b></h2>
<div class="card mt-3">
    <div class="card-content center">
        <div class="row">
            <form method="post" action="{{ url('admin/question/edit/'.$question->id) }}">
                @csrf
                @method('patch')
                <div class="input-field col s6">
                    <input id="session" type="number" name="session" value="{{ $question->session }}">
                    <label for="session">Sesi</label>
                </div>
                <div class="input-field col s6">
                    <input id="question" type="text" name="question" value="{{ $question->question }}">
                    <label for="question">Pertanyaan</label>
                </div>
                <div class="input-field col s6">
                    <input id="key" type="text" name="answer_key" value="{{ $question->answer_key }}">
                    <label for="key">Kunci Jawaban</label>
                </div>
                <div class="input-field col s6">
                    <input id="option_a" type="text" name="option_a" value="{{ $question->option_a }}">
                    <label for="option_a">Opsi A</label>
                </div>
                <div class="input-field col s6">
                    <input id="option_b" type="text" name="option_b" value="{{ $question->option_b }}">
                    <label for="option_b">Opsi B</label>
                </div>
                <div class="input-field col s6">
                    <input id="option_c" type="text" name="option_c" value="{{ $question->option_c }}">
                    <label for="option_c">Opsi C</label>
                </div>
                <div class="input-field col s6">
                    <input id="option_d" type="text" name="option_d" value="{{ $question->option_d }}">
                    <label for="option_d">Opsi D</label>
                </div>

                <div class="row">
                    <button class="btn btn-large orange waves-effect waves-light btn-block-40" type="submit"
                        name="action">Edit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
@section('js')
@if (session('status'))
<script>
    M.toast({html: 'Berhasil di update', classes: 'rounded'});
</script>
@endif
@endsection