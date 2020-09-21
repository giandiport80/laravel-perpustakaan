@extends('templates.app')
@section('title', 'Data Buku')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Buku</h2>
    </div>
    <div class="card-body">
        <x-alert-success />
        <a href="{{ route('buku.create') }}" class="btn btn-primary btn-sm font-weigth-bold mb-3"
            title="tambah kategori">+ Buku</a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Kategori buku</th>
                    <th>Judul buku</th>
                    <th>Keterangan</th>
                    <th>Penulis</th>
                    <th>Stok</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_buku as $buku)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td>{{ $buku->kategori->nama }}</td>
                    <td>{{ $buku->judul }}</td>
                    <td>{{ $buku->keterangan }}</td>
                    <td>{{ $buku->penulis }}</td>
                    <td>{{ $buku->stok }}</td>
                    <td>
                        <form action="{{ route('buku.destroy', $buku->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('buku.edit', $buku->id) }}" class="btn btn-success btn-sm"
                                title="ubah kategori">
                                <span class="mdi mdi-square-edit-outline"></span>
                            </a>
                            <button type="submit" onclick="return confirm('Yakin Hapus?')" class="btn btn-danger btn-sm"
                                title="hapus kategori">
                                <span class="mdi mdi-trash-can-outline"></span>
                            </button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Tidak Ada data buku</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>
@endsection