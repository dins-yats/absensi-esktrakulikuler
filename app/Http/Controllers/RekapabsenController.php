<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Murid;
use Illuminate\Http\Request;

class RekapabsenController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Murid::orderBy('name');

    // Kalau ada keyword pencarian
    if ($request->filled('keyword')) {
        $query->where('name', 'like', '%' . $request->keyword . '%');
    }

        $murids = $query->get();
        $tanggalList = Absen::select('tanggal')
                    ->groupBy('tanggal')
                    ->orderBy('tanggal')
                    ->pluck('tanggal');
        $absensi = Absen::get();

    return view('dashboard.rekapabsen.rekap', compact('murids', 'tanggalList', 'absensi'));
     
    }

    // KODING BUAT LOG ABSEN DILUAR

//     public function index(Request $request)
// {
//     // Default: koleksi kosong
//     $murids = collect();

//     // Kalau ada keyword pencarian
//     if ($request->filled('keyword')) {
//         $murids = Murid::orderBy('name')
//             ->where('name', 'like', '%' . $request->keyword . '%')
//             ->get();
//     }

//     $tanggalList = Absen::select('tanggal')
//         ->groupBy('tanggal')
//         ->orderBy('tanggal')
//         ->pluck('tanggal');

//     $absensi = Absen::get();

//     return view('dashboard.rekapabsen.rekap', compact('murids', 'tanggalList', 'absensi'));
// }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(absen $absen)
    {
        //
    }
}
