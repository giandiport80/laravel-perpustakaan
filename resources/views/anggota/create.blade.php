@extends('templates.app')
@section('title', 'Tambah Anggota')

@section('content')
<div class="row justify-content-center">
    <div class="col-md-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Tambah Anggota</h2>
            </div>
            <div class="card-body">
                <form action="{{ route('anggota.store') }}" method="POST">
                    @csrf

                    <div class="form-group">
                        <label for="name">Nama Anggota</label>
                        <input type="text" name="name" value="{{ old('name') }}"
                            class="form-control @error('name') is-invalid @enderror" id="name">
                        @error('name')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                        @enderror
                    </div>

                    <div class="form-group">
                      <label for="email">Email</label>
                      <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email">
                      @error('email')
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