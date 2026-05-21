@extends('main')

@section('title', 'Fakultas')

@section('content')
    <a href="{{route('fakultas.create')}}" class="btn btn-primary">Tambah</a>
    <table class="table table-bordered mt-2">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Singkatan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($result as $item)
                <tr>
                    <td>{{ $item -> nama_fakultas }}</td>
                    <td>{{ $item -> singkatan }}</td>
                    <td class="d-flex gap-2">
                        <form method="POST" action="{{ route('fakultas.destroy', $item->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>

                        <form method="GET" action="{{ route('fakultas.edit', $item->id) }}">
                            @csrf
                            <button type="submit" class="btn btn-warning btn-sm">
                                Ubah
                            </button>
                        </form>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
