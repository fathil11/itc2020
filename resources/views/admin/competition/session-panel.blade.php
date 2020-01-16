@extends('layouts.app')

@section('customstyle')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')    
<div class="container">
    @if (isset($status))
    @if (session('status'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <div class="row justify-content-center mx-auto text-center min-vh-100">
        <div class="col-12">
            <h1>Sesi: {{ $status->session }}</h1>
            <h1>Soal: {{ $status->question }}</h1>
        </div>
            <form action="/admin/competition/session-panel" method="post">
                @csrf
                @method('patch')              
                <div class="form-group row">
                    <label for="session" class="col-sm-2 col-form-label">Sesi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="session" name="session" value="{{ $status->session }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="question" class="col-sm-2 col-form-label">Soal</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="question" name="question" value="{{ $status->question }}">
                    </div>
                </div>
                <button type="submit" class="btn btn-primary">Update</button>
            </form>
    </div>
    @else
        <form action="" method="post">
            @csrf
            @method('put')
            <button type="submit" class="btn btn-primary">Mulai Sesi</button>
        </form>
    @endif
</div>
@endsection