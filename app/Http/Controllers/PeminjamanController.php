<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PeminjamanController extends Controller
{
    public function store(Buku $buku)
    {
        Peminjaman::create([
            'user_id' => Auth::id(),
            'buku_id' => $buku->id 
        ]);

        session()->flash('success', 'Buku berhasil dipinjam!');

        return redirect()->route('buku.index');
    }
}
