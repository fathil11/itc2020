@extends('layouts.adminLayout')

@section('title', 'Panel Sesi')

@section('content')
<h2 class="center teal-text"><b>Eliminasi</b></h2>
<div class="card mt-3">
    <div class="card-content center">
        <div class="row">
            <form action="{{ url('admin/competition/eliminate') }}" method="post">
                @csrf
                @method('put')
                <div class="input-field col s3">
                    <input id="eliminate_number" max="2" type="number">
                    <label for="eliminate_number">Jumlah Peserta Dipertahankan</label>
                </div>
        </div>
        <div class="row">
            <button class="btn btn-large red waves-effect waves-light btn-block-40" type="submit"
                name="action">Eliminasi</button>
        </div>
        </form>
        <form action="{{ url('admin/competition/undo-eliminate') }}" method="post">
            @csrf
            @method('put')
            <div class="row">
                <button class="btn btn-large teal waves-effect waves-light btn-block-40" type="submit"
                    name="action">Buka
                    Eliminasi</button>
            </div>
        </form>
    </div>
</div>
@endsection
@section('js')
@if (session('status'))
<script>
    M.toast({html: 'Berhasil di update', classes: 'rounded'});
</script>
@endif
<script>
    $(document).ready(function () {
        var current_number = parseInt($("#question-number").text(), 10)
        $("#question-min").on("click", function () {
            var setNumber = current_number -= 1
            $("#question-number").text(setNumber)
            $("#hidden-question-input").val(setNumber)
        })
        $("#question-plus").on("click", function () {
            var setNumber = current_number += 1
            $("#question-number").text(setNumber)
            $("#hidden-question-input").val(setNumber)
        })
    })
</script>
@endsection