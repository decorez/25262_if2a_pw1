@extends('main')

@section('title', 'Mahasiswa')

@section('content')
    <a href="{{route('mahasiswa.create')}}" class="btn btn-primary">Tambah</a>

    <table class="table table-bordered mt-2" border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>NPM</th>
        <th>Foto</th>
        <th>Program Studi</th>
        <th>Aksi</th>
    </tr>

    @foreach($mahasiswa as $key => $mhs)
    <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $mhs->nama }}</td>
        <td>{{ $mhs->npm }}</td>
        <td>
            @if($mhs->foto)
                <img src="{{ asset('storage/fotos/'.$mhs->foto) }}" alt="Foto" width="100">
            @else
                <p>Foto tidak tersedia</p>
            @endif
        </td>
        <td>{{ $mhs->prodi->nama_prodi ?? '-' }}</td>
        <td class="d-flex gap-2">
            <form method="POST" action="{{ route('mahasiswa.destroy', $mhs->id) }}">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="btn btn-danger btn-sm show_confirm">
                    Hapus
                </button>
            </form>

            <form method="GET" action="{{ route('mahasiswa.edit', $mhs->id) }}">
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

