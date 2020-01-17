@extends('layouts.observerLayout')
@section('title', 'Tabel Peserta')
@section('content')
@foreach ($participants as $participant)
<div class="card waves-effect waves-red">
    <div class="card-content">
        <div class="row">
            <div class="col s12">
                <div class="btn-floating btn-large waves-effect waves-light secondary">
                    <h5>{{ $participant->id }}</h5>
                </div>
            </div>
            <a class="right red-text" href=""><i class="material-icons">delete</i></a>
            <a class="right mr-1 orange-text" href=""><i class="material-icons">create</i></a>
            <div class="col s12">
                <h5 class="my-none secondary-text"><b>{{ $participant->name }}</b></h5>
                <span class="mx-none mt-1 new badge left" data-badge-caption="">{{ $participant->school }}</span>
            </div>
        </div>
    </div>
</div>
@endforeach
@endsection
