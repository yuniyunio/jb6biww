<!-- resources/views/books/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>{{ $menu->title }}</h2>
        <p><strong>Deskripsi:</strong> {{ $menu->detail->deskripsi }}</p>
        <p><strong>Tanggal:</strong> {{ $menu->detail->tanggal_ubah }}</p>
        <a href="{{ route('menus.index') }}" class="btn btn-primary">Kembali</a>
    </div>
@endsection
