@extends('layouts.observerLayout')
@section('title', 'Koreksi Jawaban')
@section('content')
<div class="center">
    @if ($question->session == 1)
    <h4><b>Penyisihan 1</b></h4>
    <h5 class="mt-1">Soal {{ $question->id }}</h5>
    @elseif ($question->session == 2)
    <h4><b>Penyisihan 2</b></h4>
    <h5 class="mt-1">Soal {{ $question->id-30 }}</h5>
    @elseif ($question->session == 3)
    <h4><b>Final 1</b></h4>
    <h5 class="mt-1">Soal {{ $question->id-50 }}</h5>
    @elseif ($question->session == 4)
    <h4><b>Final 2</b></h4>
    <h5 class="mt-1">Soal {{ $question->id-60 }}</h5>
    @else
    @endif
</div>
<div class="divider mb-2"></div>
<form method="post" action="{{ url('observer/competition/answer/') }}">
    @csrf
    @method('patch')
    @foreach ($participants as $participant)
    <div class="card">
        <div class="card-content">
            <div class="row">
                <div class="col s3">
                    <div class="btn-floating btn-large waves-effect waves-light secondary">
                        <h5>{{ $participant->id }}</h5>
                    </div>
                </div>
                <div class="col s9 mt-1">
                    <h5 class="my-none secondary-text"><b>{{ $participant->name }}</b></h5>
                </div>
                <div class="col s12 mt-3 center">
                    @if ($question->session == 1)
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="A" />
                            <span class="blue-radio">A</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="B" />
                            <span class="yellow-radio">B</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="Z" />
                            <span class="gray-radio">-</span>
                        </label>
                    </p>
                    @elseif ($question->session == 2)
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="A" />
                            <span class="blue-radio">A</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="B" />
                            <span class="yellow-radio">B</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="C" />
                            <span class="green-radio">C</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="D" />
                            <span>D</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="Z" />
                            <span class="gray-radio">-</span>
                        </label>
                    </p>
                    @elseif ($question->session == 3)
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="A" />
                            <span class="blue-radio">A</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="B" />
                            <span class="yellow-radio">B</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="C" />
                            <span class="green-radio">C</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="Z" />
                            <span class="gray-radio">-</span>
                        </label>
                    </p>
                    @elseif ($question->session == 4)
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="5" />
                            <span class="blue-radio">+5</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="4" />
                            <span class="yellow-radio">+4</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="3" />
                            <span class="green-radio">+3</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="2" />
                            <span class="gray-radio">+2</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="1" />
                            <span class="gray-radio">+1</span>
                        </label>
                    </p>
                    <p class="inline">
                        <label>
                            <input name="answer[{{ $participant->id }}]" type="radio" value="0" />
                            <span class="gray-radio">+0</span>
                        </label>
                    </p>
                    @endif
                </div>
            </div>
        </div>
    </div>
    @endforeach
    <div class="mt-1 mb-bottom">
        <button type="submit" class="btn btn-large btn-block">Masukan Jawaban</button>
    </div>
</form>
@endsection
