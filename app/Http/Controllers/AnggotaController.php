<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AnggotaController extends Controller
{
    public function index()
    {
        $data_anggota = User::where('role', 'user')->latest()->get();
        return view('anggota.index', compact('data_anggota'));
    }

    public function create()
    {
        return view('anggota.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt('password')
        ]);

        session()->flash('success', 'Data User Berhasil Ditambahkan');

        return redirect()->route('anggota.index');
    }

    public function destroy(User $user)
    {
        $user->delete();

        session()->flash('success', 'Data Anggota Berhasil Dihapus!');

        return redirect()->route('anggota.index');
    }
}
