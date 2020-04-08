@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-sm-12 py-2">
            <h2>
                Daftar Mahasiswa
            </h2>
        </div>
        <div class="col-sm-12 py-2">
            <a href="/students/new" class="btn btn-primary">Tambah Mahasiswa</a>
        </div>
        <div class="col-sm-12 py-2">
            <table class="table table-striped book-table">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Jurusan</th>
                        <th></th>
                    </tr>
                </thead>
                
                <tbody>
                    @if (count($students) == 0)
                        <tr>
                            <td colspan="5" style="text-align: center">Tidak ada data</td>
                        </tr>
                    @endif
                    @foreach ($students as $student)
                        <tr>
                            <td>
                                {{ $student->id }}
                            </td>
                            <td>
                                {{ $student->name }}
                            </td>
                            <td>
                                {{ $student->major->name }}
                            </td>
                            <td>
                                <form action="/students/{{ $student->id }}" method="POST">
                                    {{ csrf_field() }}
                                    {{ method_field('DELETE') }}

                                    <button class="btn btn-danger">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection