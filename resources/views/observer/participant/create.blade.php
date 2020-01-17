@extends('layouts.observerLayout')
@section('title', 'Tambah Peserta')
@section('content')
<div class="card">
    <div class="card-content center">
        <div class="row">
            <form action="{{ url('observer/participant/add') }}" method="post">
                <div class="input-field col s12">
                    @csrf
                    @method('put')
                    <input name="participants_id" id="participant_number" type="text" class="validate"
                        placeholder="ex: 1,2,3,..">
                    <label for="participant_number">No Peserta</label>
                    <p id="info" class="right"></p>
                </div>
                <div class="col s12">
                    <button class="btn waves-effect waves-light">Tambahkan Peserta</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
