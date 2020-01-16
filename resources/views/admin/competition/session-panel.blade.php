@extends('layouts.adminLayout')

@section('title', 'Panel Sesi')

@section('content')
<h2 class="center teal-text"><b>Kontrol Sesi</b></h2>
<div class="card mt-3">
    <div class="card-content center">
        <form action="/admin/competition/session-panel" method="post">
            @csrf
            @method('patch')
            <p class="radio-inline">
                <label>
                    <input name="session" type="radio" value="1" @if($status->session == 1) checked @endif/>
                    <span>Sesi 1</span>
                </label>
            </p>
            <p class="radio-inline">
                <label>
                    <input name="session" value="2" type="radio" @if($status->session == 2) checked @endif/>
                    <span>Sesi 2</span>
                </label>
            </p>
            <p class="radio-inline">
                <label>
                    <input name="session" value="3" type="radio" @if($status->session == 3) checked @endif/>
                    <span>Sesi 3</span>
                </label>
            </p>
            <p class="radio-inline">
                <label>
                    <input name="session" value="4" type="radio" @if($status->session == 4) checked @endif/>
                    <span>Sesi 4</span>
                </label>
            </p>
            <br>
            <div class="mt-4">
                <button type="button" id="question-min"
                    class="btn-floating btn-large waves-effect waves-light red question-btn"><i
                        class="material-icons">keyboard_arrow_left</i></button>
                <input id="hidden-question-input" type="hidden" class="form-control" id="question" name="question"
                    value="{{ $status->question }}">
                <h2 id="question-number" class="d-inline question-number">{{ $status->question }}</h2>
                <button type="button" id="question-plus"
                    class="btn-floating btn-large waves-effect waves-light green question-btn"><i
                        class="material-icons">keyboard_arrow_right</i></button>
            </div>
            <br>

            <button class="btn btn-large waves-effect waves-light btn-block-40" type="submit"
                name="submit">Submit</button>
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