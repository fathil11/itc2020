@extends('layouts.observerLayout')
@section('title', 'Home')
@section('content')
<div class="card">
    <div class="card-content center">
        <a href="{{ ('competition/answer') }}" class="btn btn-primary">Input Jawaban</a>
    </div>
</div>
@endsection
@if (Session::get('status'))
@section('js')
<script>
    M.toast({html: 'Jawaban sudah diinput'})
</script>
@endsection
@endif
