@extends('layouts.navbaradmin')

@section('content')
        <div class="container my-5">
            <h3>Data Soal</h3>
            <div class="row">
                <div class="col">
                    <table class="table">
                        <thead class="thead-dark">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Id</th>
                                <th scope="col">Sesi</th>
                                <th scope="col">Soal</th>
                                <th scope="col">Kunci Jawaban</th>
                                <th scope="col">Pilihan A</th>
                                <th scope="col">Pilihan B</th>
                                <th scope="col">Pilihan C</th>
                                <th scope="col">Pilihan D</th>
                                <th scope="col" colspan="2" class="text-center">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($questions as $question)
                            <tr>
                                <td scope="row">{{ $loop->iteration }}</td>
                                <td scope="row">{{ $question->id }}</td>
                                <td scope="row">{{ $question->session }}</td>
                                <td scope="row">{{ $question->question }}</td>
                                <td scope="row">{{ $question->answer_key }}</td>
                                <td scope="row">{{ $question->option_a }}</td>
                                <td scope="row">{{ $question->option_b }}</td>
                                <td scope="row">{{ $question->option_c }}</td>
                                <td scope="row">{{ $question->option_d }}</td>
                                <td>
                                    <form action="{{ url('admin/question/'.$question->id.'/edit') }}" method="post" class="d-inline">
                                        @csrf
                                        <button type="submit" class="badge badge-success">Edit</button>
                                    </form>
                                    {{-- url('admin/question/table', ['id' => $question->id]) --}}
                                    <form action="{{ url ('admin/question/table/'.$question->id) }}" method="post" class="d-inline">
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="badge badge-danger">Delete</button>
                                    </form>
                                </td>
                                <td><a href="{{ url ('admin/question/table/'.$question->id) }}" class="badge badge-primary">Show</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <a href="{{ url('admin/question/add') }}" class="btn btn-primary my-3">Tambah Soal</a>
                </div>
            </div>
        </div>
@endsection