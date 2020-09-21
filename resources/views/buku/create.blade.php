@extends('templates.app')
@section('title', 'Tambah Buku')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Tambah Buku</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('buku.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="kategori">Kategori</label>
                        <select name="kategori_id" id="kategori" class="form-control">
                            @foreach ($data_kategori as $kategori)
                            <option value="{{ $kategori->id }}">{{ $kategori->nama }}</option>
                            @endforeach
                        </select>
                        @error('kategori')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="judul">Judul Buku</label>
                        <input type="text" name="judul" value="{{ old('judul') }}"
                            class="form-control @error('judul') is-invalid @enderror" id="judul">
                        @error('judul')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="keterangan">Keterangan</label>
                        <textarea name="keterangan" value="{{ old('keterangan') }}"
                            class="form-control @error('keterangan') is-invalid @enderror" id="keterangan" cols="30"
                            rows="10"></textarea>
                        @error('keterangan')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="penulis">Penulis</label>
                        <input type="text" name="penulis" value="{{ old('penulis') }}"
                            class="form-control @error('penulis') is-invalid @enderror" id="penulis">
                        @error('penulis')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                        <label for="stok">Stok</label>
                        <input type="number" name="stok" value="{{ old('stok') }}"
                            class="form-control @error('stok') is-invalid @enderror" id="stok">
                        @error('stok')
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