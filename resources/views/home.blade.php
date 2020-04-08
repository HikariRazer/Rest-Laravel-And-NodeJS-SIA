@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-4">
            <h2>Jurusan</h2>
            <p>
                Data jurusan
            </p>
            <p>
                <a class="btn btn-secondary" href="/majors">Selengkapnya</a>
            </p>
        </div>
        <div class="col-md-4">
            <h2>Mahasiswa</h2>
            <p>
                Data mahasiswa
            </p>
            <p>
                <a class="btn btn-secondary" href="/students">Selengkapnya</a>
            </p>
        </div>
    </div>
@endsection