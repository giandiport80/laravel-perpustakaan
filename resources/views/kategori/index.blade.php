@extends('templates.app')
@section('title', 'Data Kategori')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Kategori</h2>
    </div>
    <div class="card-body">
        <a href="" class="btn btn-primary btn-sm font-weigth-bold mb-3" title="tambah kategori">+ Kategori</a>
        <table class="table table-bordered">
            <thead class="text-center">
                <tr>
                    <th>No</th>
                    <th>Kategori</th>
                    <th>Dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_kategori as $kategori)
                <tr>
                    <td class="text-center">{{ $loop->iteration }}.</td>
                    <td>{{ $kategori->nama }}</td>
                    <td>{{ $kategori->created_at->format('d F Y') }}</td>
                    <td>
                        <a href="" class="btn btn-success btn-sm" title="ubah kategori">Ubah</a>
                        <a href="" class="btn btn-danger btn-sm" title="hapus kategori">Hapus</a>
                    </td>
                </tr>
            </tbody>
            @empty
            data tidak ada
            @endforelse
        
        </table>
    </div>
</div>
@endsection