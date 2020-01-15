@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row mt-5 mb-4">
        <div class="col mx-auto">
            <a href="{{ url('/admin/question/table') }}" class="btn btn-primary" style="width: 200px;">Soal</a>
        </div>
        <div class="col mx-auto">
            <a href="{{ url('/admin/participant/table') }}" class="btn btn-success" style="width: 200px;">Peserta</a>
        </div>
        <div class="col mx-auto">
            <a href="{{ url('/admin/observer/table') }}" class="btn btn-danger" style="width: 200px;">Pengawas</a>
        </div>
    </div>
    <div class="row my-4">
        <div class="col mx-auto">
            <a href="{{ url('/admin/competition/statistic') }}" class="btn btn-secondary" style="width: 200px;">Statistic</a>
        </div>
        <div class="col mx-auto">
            <a href="{{ url('/admin/competition/question/'.$question->id) }}" class="btn btn-warning" style="width: 200px;">Tampil Soal</a>
        </div>
        <div class="col mx-auto">
            <div style="width: 200px;"></div>
        </div>
    </div>
</div>
@endsection