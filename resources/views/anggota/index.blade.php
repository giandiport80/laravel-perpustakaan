@extends('templates.app')
@section('title', 'Anggota')

@section('content')
<div class="card card-default">
    <div class="card-header card-header-border-bottom">
        <h2>Data Anggota</h2>
    </div>
    <div class="card-body">
        <x-alert />
        <a href="{{ route('anggota.create') }}" class="btn btn-primary btn-sm mb-3" title="Tambah Anggota">+ anggota</a>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th>Tanggal dibuat</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($data_anggota as $anggota)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $anggota->name }}</td>
                    <td>{{ $anggota->email }}</td>
                    <td>{{ $anggota->created_at->format('d F Y H:i') }}</td>
                    <td>
                        <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST">
                            @csrf
                            @method('DELETE')

                            <button class="btn btn-danger btn-sm"
                                onclick="return confirm('Yakin Hapus {{ $anggota->name }}?')">
                                <span class="mdi mdi-trash-can-outline" title="hapus anggota"></span>
                            </button>

                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data anggota</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
