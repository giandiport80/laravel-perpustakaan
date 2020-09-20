@extends('templates.app')
@section('title', 'Ubah Kategori')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Tambah Kategori</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('kategori.update', $kategori->id) }}" method="POST">
                    @csrf
                    @method('PATCH')

                    <div class="form-group">
                        <label for="nama">Nama Kategori</label>
                        <input type="text" name="nama" value="{{ old('nama') ?? $kategori->nama }}"
                            class="form-control @error('nama') is-invalid @enderror" id="nama">
                        @error('nama')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <button type="submit" class="btn btn-primary btn-sm">+ Tambah</button>

                </form>
            </div>
        </div>
    </div>
</div>
@endsection