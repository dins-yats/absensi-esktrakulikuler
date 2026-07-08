<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Murid;
use App\Models\Absen;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{  public function index(Request $request) 
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

    return view('dashboard.admin.index', compact('murids', 'tanggalList', 'absensi'));
        //  return view('dashboard.rekapabsen.rekap',[
 

    }

     public function exportdata(Request $request)
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

    return view('dashboard.admin.exportdata', compact('murids', 'tanggalList', 'absensi'));

    }
    

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
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }
}
