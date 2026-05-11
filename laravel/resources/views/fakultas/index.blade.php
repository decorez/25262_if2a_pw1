@extends('main')

@section('title', 'Fakultas')

@section('content')
    <a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah</a>
    <a href="   " class="btn btn-danger">Hapus</a>
    <a href="   " class="btn btn-warning">Perbarui</a>

    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Singkatan</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{ $item -> nama_fakultas }}</td>
                    <td>{{ $item -> singkatan }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
