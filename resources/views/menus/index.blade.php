@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary text-white">List Parfum</div>

                    <div class="card-body">
                        @if(session('success'))
                            <div class="alert alert-success" role="alert">
                                {{ session('success') }}
                            </div>
                        @endif

                        <a href="{{ route('menus.create') }}" class="btn btn-success mb-3">Tambah Parfum Baru</a>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Nama Parfum</th>
                                        <th>Deskripsi</th>
                                        <th>Tanggal</th>
                                        <th>Aksi</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($menus as $menu)
                                        <tr>
                                            <td>{{ $menu->nama_menu }}</td>
                                            <td>{{ $menu->detail->deskripsi }}</td>
                                            <td>{{ $menu->detail->tanggal_ubah }}</td>
                                            <td>
                                                <a href="{{ route('menus.show', $menu->id) }}" class="btn btn-info btn-sm">Lihat</a>
                                                <a href="{{ route('menus.edit', $menu->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                                <form action="{{ route('menus.destroy', $menu->id) }}" method="POST" style="display:inline-block">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah kamu yakin menghapus Menu ini?')">Hapus</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Tidak ada menu di list.</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
