<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PengembalianController extends Controller
{
    public function index()
    {
        if (Auth::user()->role === 'admin') {
            $data_peminjaman = Peminjaman::latest()->get();
        } else {
            $data_peminjaman = Peminjaman::whereIn('status', [1, 2])->latest()->get();
        }
        return view('pengembalian.index', compact('data_peminjaman'));
    }

    public function pengembalian(Peminjaman $peminjaman)
    {
        $peminjaman->update([
            'status' => 2
        ]);

        $stok = $peminjaman->buku->stok;
        $peminjaman->buku->update([
            'stok' => $stok + 1
        ]);

        session()->flash('success', 'Buku berhasil dikembalikan');

        return redirect()->route('pengembalian.index');
    }
}





// p: line 12, whereIn = dimana didalam status terdapat nilai 1 dan 3
