@extends('templates.app')
@section('title', 'Data Kategori')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Kategori</h2>
    </div>
    <div class="card-body">
        <x-alert />
        <a href="{{ route('kategori.create') }}" class="btn btn-primary btn-sm font-weigth-bold mb-3"
            title="tambah kategori">+ Kategori</a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_kategori as $kategori)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>
                        <form action="{{ route('kategori.destroy', $kategori->slug) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <a href="{{ route('kategori.edit', $kategori->slug) }}" class="btn btn-success btn-sm"
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
                    <td colspan="4" class="text-center">Tidak Ada data kategori</td>
                </tr>
                @endforelse
            </tbody>

        </table>
    </div>
</div>
@endsection