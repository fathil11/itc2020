@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="row">
                        <div class="col mx-auto">
                            <a href="{{ url('/admin/question/table') }}" class="btn btn-primary" style="width: 100px;">Soal</a>
                        </div>
                        <div class="col mx-auto">
                            <a href="{{ url('/admin/participant/table') }}" class="btn btn-success" style="width: 100px;">Peserta</a>
                        </div>
                        <div class="col mx-auto">
                            <a href="{{ url('/admin/observer/table') }}" class="btn btn-danger" style="width: 100px;">Pengawas</a>
                        </div>
                        <div class="col mx-auto">
                            <a href="{{ url('/admin/competition/question/'.$question->id) }}" class="btn btn-warning" style="width: 100px;">Jalan Lomba</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection