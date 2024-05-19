@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Edit</div>

                    <div class="card-body">
                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form method="POST" action="{{ route('menus.update', $menu->id) }}">
                            @csrf
                            @method('PUT')

                            <div class="form-group">
                                <label for="nama_menu">Nama Parfum</label>
                                <input type="text" class="form-control" id="nama_menu" name="nama_menu" value="{{ $menu->nama_menu }}">
                            </div>

                            <div class="form-group">
                                <label for="deskripsi">Nama Pembeli</label>
                                <input type="text" class="form-control" id="deskripsi" name="deskripsi" value="{{ $menu->detail->deskripsi }}">
                            </div>

                            <div class="form-group">
                                <label for="tanggal_ubah">Ubah Tanggal</label>
                                <input type="text" class="form-control" id="tanggal_ubah" name="tanggal_ubah" value="{{ $menu->detail->tanggal_ubah }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
