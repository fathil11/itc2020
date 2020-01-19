@extends('layouts.observerLayout')
@section('title', 'Home')
{{-- @section('customStyle')
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" media="screen,projection" />
@endsection --}}
@section('content')
<div class="card min-vh-80">
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
