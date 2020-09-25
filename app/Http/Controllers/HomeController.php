<?php

namespace App\Http\Controllers;

use App\Kategori;
use App\Peminjaman;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $anggota = User::where('role', 'user')->get();
        $kategori = Kategori::all();
        $peminjaman = Peminjaman::latest()->get();
        $pengembalian = Peminjaman::whereIn('status', [1, 2])->latest()->get();
        return view('home', compact('anggota', 'kategori', 'peminjaman', 'pengembalian'));
    }
}
