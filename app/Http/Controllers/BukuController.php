<?php

namespace App\Http\Controllers;

use App\Buku;
use App\Kategori;
use Illuminate\Http\Request;

class BukuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data_buku = Buku::latest()->get();
        return view('buku.index', compact('data_buku'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data_kategori = Kategori::all();
        return view('buku.create', compact('data_kategori'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'keterangan' => 'required',
            'penulis' => 'required|min:3',
            'stok' => 'required'
        ]);

        Buku::create($request->all());

        session()->flash('success', 'Data Buku berhasil ditambahkan!');

        return redirect()->route('buku.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Buku $buku)
    {
        $data_kategori = Kategori::all();
        return view('buku.edit', compact('buku', 'data_kategori'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Buku $buku)
    {
        $request->validate([
            'judul' => 'required|min:3',
            'keterangan' => 'required',
            'penulis' => 'required|min:3',
            'stok' => 'required'
        ]);

        $buku->update($request->all());

        session()->flash('success', 'Data Buku berhasil diubah!');

        return redirect()->route('buku.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Buku $buku)
    {
        $buku->delete();

        session()->flash('success', 'Data Buku berhasil dihapus!');

        return redirect()->route('buku.index');
    }

    public function bukuStatus(Buku $buku)
    {
        if ($buku->status == 1) {
            $buku->update([
                'status' => 0
            ]);
        }else{
            $buku->update(['status' => 1 ]);
        }

        return redirect()->route('buku.index');
    }
}
