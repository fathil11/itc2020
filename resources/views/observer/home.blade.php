@extends('layouts.observerLayout')
@section('title', 'Home')
@section('content')
<div class="card">
    <div class="card-content center">
        <h3 class="secondary-text"><b>Welcome to ITC Admin Panel</b></h3>
        <h4>v.2.0</h4>
        <img src="{{ asset('img/anmlogo.gif') }}" class="responsive-img" alt="" srcset="">
    </div>
</div>
@endsection

@if (Session::get('status') == 2)
@section('js')
<script>
    M.toast({html: 'Anda sudah menginputkan peserta !'})
</script>
@endsection
@endif
