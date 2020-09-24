@extends('templates.app')
@section('title', 'Data Peminjaman Buku')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Pengembalian Buku</h2>
    </div>
    <div class="card-body">
        <x-alert />
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Penulis</th>
                    <th>Status</th>
                    <th>Tanggal Pinjam</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_peminjaman as $peminjaman)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $peminjaman->user->name }}</td>
                    <td>{{ $peminjaman->buku->judul }}</td>
                    <td>{{ $peminjaman->buku->penulis }}</td>
                    <td>
                        @if($peminjaman->status === 1)
                        <span class="badge badge-info" title="Sedang dipinjam">Sedang dipinjam</span>
                        @else
                        <span class="badge badge-success" title="Sudah Dikembalikan">Sudah Dikembalikan</span>
                        @endif
                    </td>
                    <td>{{ $peminjaman->created_at->format('d F Y H:i') }}</td>
                    @if($peminjaman->status === 1)
                    <td><a href="{{ route('pengembalian.kembali', $peminjaman->id) }}"
                            class="btn btn-sm btn-outline-danger">Kembalikan</a></td>
                    @else
                    <td></td>
                    @endif
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="text-center">Tidak Ada data peminjaman</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsectionphp 