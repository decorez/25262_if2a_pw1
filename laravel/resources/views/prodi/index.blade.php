@extends('main')

@section('title', 'Program Studi')

@section('content')
    <a href="{{route('prodi.create')}}" class="btn btn-primary">Tambah</a>

    <table class="table table-bordered mt-2" border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama Prodi</th>
        <th>Singkatan</th>
        <th>Kaprodi</th>
        <th>Fakultas</th>
        <th>Singkatan</th>
        <th>Aksi</th>
    </tr>

    @foreach($prodis as $key => $prodi)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $prodi->nama_prodi }}</td>
        <td>{{ $prodi->singkatan }}</td>
        <td>{{ $prodi->kaprodi }}</td>
        <td>{{ $prodi->fakultas->nama_fakultas ?? '-' }}</td>
        <td>{{ $prodi->fakultas->singkatan}}</td>
        <td class="d-flex gap-2">
            <form method="POST" action="{{ route('prodi.destroy', $prodi->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm">
                    Hapus
                </button>
            </form>

            <form method="GET" action="{{ route('prodi.edit', $prodi->id) }}">
                @csrf
                <button type="submit" class="btn btn-warning btn-sm">
                    Ubah
                </button>
            </form>
        </td>
    </tr>
    @endforeach

</table>
@endsection

