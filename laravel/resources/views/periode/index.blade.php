@extends('main')

@section('title', 'Periode')

@section('content')
   <a href="{{route('periode.create')}}" class="btn btn-primary">Tambah</a>
   
   <table class="table table-bordered mt-2">
      <thead>
         <tr>
               <th>Tahun Akademik</th>
               <th>Semester</th>
               <th>Aksi</th>
         </tr>
      </thead>
      <tbody>
         @foreach ($result as $item)
               <tr>
                  <td>{{ $item -> tahun_akademik }}</td>
                  <td>{{ $item -> semester }}</td>
                  <td class="d-flex gap-2">
                        <form method="POST" action="{{ route('periode.destroy', $item->id) }}">
                            @csrf
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>

                        <form method="GET" action="{{ route('periode.edit', $item->id) }}">
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