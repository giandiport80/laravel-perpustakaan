@extends('templates.app')
@section('title', 'Home')


@section('content')
@if(auth()->user()->role === 'admin')
<div class="row">

    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card widget-block p-4 rounded bg-primary border">
            <div class="card-block">
                <i class="mdi mdi-account-outline mr-4 text-white "></i>
                <h4 class="text-white my-2">{{ $anggota->count() }}</h4>
                <h4 class="text-white">Anggota</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card widget-block p-4 rounded bg-success border">
            <div class="card-block">
                <i class="mdi mdi-file-send text-white mr-4"></i>
                <h4 class="text-white my-2">{{ $peminjaman->count() }}</h4>
                <h4 class="text-white">Peminjaman</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card widget-block p-4 rounded bg-warning border">
            <div class="card-block">
                <i class="mdi mdi-file-restore mr-4 text-white"></i>
                <h4 class="text-white my-2">{{ $pengembalian->count() }}</h4>
                <h4 class="text-white">Pengembalian</h4>
            </div>
        </div>
    </div>
    <div class="col-md-6 col-lg-6 col-xl-3">
        <div class="card widget-block p-4 rounded bg-danger border">
            <div class="card-block">
                <i class="mdi mdi-book-multiple mr-4 text-white"></i>
                <h4 class="text-white my-2">{{ $kategori->count() }}</h4>
                <h4 class="text-white">Kategori</h4>
            </div>
        </div>
    </div>

</div>
@else
<h3>Selamat datang {{ auth()->user()->name }}!</h3>
@endif
@endsection
