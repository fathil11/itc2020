@extends('layouts.app')

@section('customstyle')
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
@endsection

@section('content')    
<div class="container">
    @if (session('status-eliminate'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status-eliminate') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session('status-undo'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('status-undo') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (isset($status))
    <div class="row justify-content-center mx-auto text-center min-vh-100">
        <div class="col-12">
            <h2>Sesi : {{ $status->session }}</h2>
            <h1>Eliminasi</h1>
            <form action="/admin/competition/eliminate" method="post" class="my-1">
                @csrf
                @method('put')           
                <div class="form-group row">
                    <label for="eliminate" class="col-sm-2 col-form-label">Jumlah Tereliminasi</label>
                    <div class="col-sm-10">
                        <input type="number" class="form-control" id="eliminate" name="eliminate" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="width: 150px">Eliminasi</button>
            </form>
            <form action="/admin/competition/eliminate" method="post" class="my-1">
                @csrf
                @method('patch')
                <button type="submit" class="btn btn-warning" style="width: 150px">Undo</button>
            </form>
        </div>
    </div>
    @endif
</div>
@endsection