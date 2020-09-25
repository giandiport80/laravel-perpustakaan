<?php

namespace App\Http\Controllers;

use App\Peminjaman;
use Barryvdh\DomPDF\Facade as PDF;
use Illuminate\Http\Request;

class LaporanController extends Controller
{
    public function printPdf()
    {
        $data_peminjaman = Peminjaman::latest()->get();
        $pdf = PDF::loadView('laporan.index', compact('data_peminjaman'));
        return $pdf->download('laporan-peminjaman.pdf');
    }
}
