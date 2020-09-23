<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use Illuminate\Http\Request;

class PengembalianController extends Controller
{
    public function index()
    {
        $data_peminjaman = Peminjaman::whereIn('status', [1, 2])->latest()->get();
        return view('pengembalian.index', compact('data_peminjaman'));
    }

    public function pengembalian(Peminjaman $peminjaman)
    {
        $peminjaman->update([
            'status' => 2
        ]);

        session()->flash('success', 'Buku berhasil dikembalikan');

        return redirect()->route('pengembalian.index');
    }
}





// p: line 12, whereIn = dimana didalam status terdapat nilai 1 dan 3