@extends('main')

@section('title', 'Fakultas')

@section('content')
    <h1>Fakultas</h1>

    @foreach ($result as $item)
        {{ $item -> nama_fakultas }} - {{ $item->singkatan }}<br>
    @endforeach

@endsection
