@extends('layouts.app')

@section('navbar')
<ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <a class="nav-link" href="/admin/question/table">Soal</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/participant/table">Peserta</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/observer/table">Pengawas</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="/admin/competition/statistic">Statistik</a>
    </li>
</ul>
@endsection