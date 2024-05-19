<!-- resources/views/books/create.blade.php -->
@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Tambah Menu Parfum</h2>
        <form action="{{ route('menus.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="nama_menu">Nama Parfum </label>
                <input type="text" name="nama_menu" id="nama_menu" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi</label>
                <input type="text" name="deskripsi" id="deskripsi" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="tanggal_ubah">Tanggal</label>
                <input type="number" name="tanggal_ubah" id="tanggal_ubah" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Tambah Parfum</button>
        </form>
    </div>
@endsection
