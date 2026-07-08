<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absen;
use App\Models\Murid;

class LogharianController extends Controller
{
        public function index(Request $request)
        {
    // Default: koleksi kosong
    $murids = collect();

    // Kalau ada keyword pencarian
    if ($request->filled('keyword')) {
        $murids = Murid::orderBy('name')
            ->where('name', 'like', '%' . $request->keyword . '%')
            ->get();
    }

    $tanggalList = Absen::select('tanggal')
        ->groupBy('tanggal')
        ->orderBy('tanggal')
        ->pluck('tanggal');

    $absensi = Absen::get();

    return view('logharian', compact('murids', 'tanggalList', 'absensi'));
}
}
