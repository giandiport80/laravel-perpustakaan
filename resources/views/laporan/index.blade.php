<h1>Data Peminjaman Buku</h1>
<table border="1" cellspacing="0" cellpadding="8">
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
                @if(auth()->user()->role == 'admin')
                @if($peminjaman->status === null)
                <span class="badge badge-warning" title="Terima Persetujuan">Menunggu Verifikasi</span>
                @elseif($peminjaman->status === 1)
                <span class="badge badge-success" title="Batalkan persetujuan">Disetujui</span>
                @elseif($peminjaman->status === 2)
                <span class="badge badge-info" title="Batalkan persetujuan">Sudah Dipinjam</span>
                @else
                <span class="badge badge-danger" title="Terima persetujuan">Ditolak</span>
                @endif
                @else
                @if($peminjaman->status === null)
                <span class="badge badge-warning" title="Terima Persetujuan">Menunggu
                    Verifikasi</span>
                @elseif($peminjaman->status === 1)
                <span class="badge badge-success" title="Batalkan persetujuan">Disetujui</span>
                @elseif($peminjaman->status === 2)
                <span class="badge badge-info" title="Batalkan persetujuan">Sudah Dipinjam</span>
                @else
                <span class="badge badge-danger" title="Terima persetujuan">Ditolak</span>
                @endif
                @endif
            </td>
            <td>{{ $peminjaman->created_at->format('d M Y H:i') }}</td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center">Tidak Ada data peminjaman</td>
        </tr>
        @endforelse
    </tbody>
</table>
