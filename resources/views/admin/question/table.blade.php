@extends('layouts.adminLayout')
@section('title', 'Soal')
@section('content')
<h2 class="center teal-text"><b>Soal</b></h2>
<div class="card mt-3">
    <div class="card-content">
        <table class="responsive-table centered highlight">
            <thead>
                <tr>
                    <th>No (Sesi)</th>
                    <th>Soal</th>
                    <th>Kunci</th>
                    <th>Pilihan</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($questions as $question)
                <tr>
                    <td>{{ $question->id }} ({{ $question->session }})</td>
                    <td>{{ $question->question }}</td>
                    <td>{{ $question->answer_key }}</td>
                    <td>
                        A. {{ $question->option_a }}<br>
                        B. {{ $question->option_b }}<br>
                        @if ($question->session == 3)
                        C. {{ $question->option_c }}
                        @elseif($question->session == 2)
                        C. {{ $question->option_c }}<br>
                        D. {{ $question->option_d }}
                        @endif
                    </td>
                    <td>
                        <form action="{{ url('admin/question/edit/' . $question->id) }}" method="post" class="d-inline">
                            @csrf
                            <button class="btn waves-effect amber darken-2 waves-light tooltipped" data-position="top"
                                data-tooltip="Update Soal" type="submit" name="action">
                                <i class="material-icons right">create</i>
                            </button>
                        </form>
                        <form action="{{ url ('admin/question/table/delete/'.$question->id) }}" method="post"
                            class="d-inline">
                            @csrf
                            @method('delete')
                            <button class="btn waves-effect red waves-light tooltipped" data-position="top"
                                data-tooltip="Delete Soal" type="submit" name="action">
                                <i class="material-icons right">delete</i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection