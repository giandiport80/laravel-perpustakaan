@extends('templates.app')
@section('title', 'Data Peminjaman Buku')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Peminjaman Buku</h2>
    </div>
    <div class="card-body">
        <x-alert />
        <a href="" class="btn btn-primary btn-sm mb-3">+ Peminjaman</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>User</th>
                    <th>Buku</th>
                    <th>Penulis</th>
                    <th>Status</th>
                    <th>Tanggal dibuat</th>
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
                        @if($peminjaman->status == null)
                        <a href="{{ route('pinjam.status', $peminjaman->id) }}" class="badge badge-danger"
                            title="Terima Persetujuan">Belum Disetujui</a>
                        @else
                        <a href="{{ route('pinjam.status', $peminjaman->id) }}" class="badge badge-success"
                            title="Batalkan persetujuan">Disetujui</a>
                        @endif
                    </td>
                    <td>{{ $peminjaman->created_at->format('d F Y H:i') }}</td>
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
@endsection