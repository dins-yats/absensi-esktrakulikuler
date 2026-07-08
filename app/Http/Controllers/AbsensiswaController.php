<?php

namespace App\Http\Controllers;

use App\Models\Absen;
use App\Models\Murid;
use Illuminate\Http\Request;
use Carbon\Carbon;

class AbsensiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {     
        
        return view('dashboard.absen.index',[
     'murids' =>murid::latest()
            ->paginate(20)->withQueryString()
                    
        ]);
    // $keyword = $request->keyword;

    // return view('dashboard.absen.index', [
    // 'absens' => absen::with('murid')
    //     ->where(function($query) use ($keyword) {
    //         $query->whereHas('murid', function($q) use ($keyword) {
    //             $q->where('name', 'LIKE', '%' . $keyword . '%');
                
    //         });
    //     })
    //     ->orWhere('status', 'LIKE', '%' . $keyword . '%')
    //     ->paginate(20)
        
    //     ]);
         
        //   $keyword = $request->keyword;
        //   return view('dashboard.absen.index', [
        //     'absens' =>absen::
        //     where('name', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('nis', 'LIKE', '%'.$keyword.'%')
        //     ->orWhere('kelas', 'LIKE', '%'.$keyword.'%')
        //     ->paginate(20)->withQueryString()
       
    
        // ]);

    //     $keyword = $request->keyword;

    //      $absen = Absen::with('murid')
    //     ->whereHas('murid', function ($query) use ($keyword) {
    //         $query->where('name', 'LIKE', '%' . $keyword . '%');
    //     })
    //     ->orWhere('status', 'LIKE', '%' . $keyword . '%') // status di absen
    //     ->paginate(20)
    //     ->withQueryString();

    // return view('dashboard.absen.index', compact('murids'));

    //  $keyword = $request->keyword;

    // $absens = Absen::with('murid')
    //     ->where(function($query) use ($keyword) {
    //         $query->whereHas('murid', function($q) use ($keyword) {
    //             $q->where('name', 'LIKE', '%' . $keyword . '%');
    //         })
    //         ->orWhere('status', 'LIKE', '%' . $keyword . '%');
    //     })
    //     ->paginate(20)
    //     ->withQueryString();

    // return view('dashboard.absen.index', compact('absens'));

}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
          return view('dashboard.absen.index',[
            'murids' =>murid::latest()
            ->paginate(20)->withQueryString()
                    
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
          $request->validate([
        'tanggal' => 'required',
        'keterangan' => 'required|array',
    ]);

       // Konversi format MM/DD/YYYY ke Y-m-d
    // $tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
     try {
        // Konversi input '06/29/2025' menjadi '2025-06-29'
        $tanggal = Carbon::createFromFormat('m/d/Y', $request->tanggal)->format('Y-m-d');
    } catch (\Exception $e) {
        return back()->with('error', 'Format tanggal salah. Gunakan format MM/DD/YYYY.');
    }
    // Ambil semua siswa
    $murids = murid::all();

    foreach ($murids as $murid) {
        Absen::create([
            'murid_id' => $murid->id,
            'name' => $murid->name, // opsional, kalau memang mau simpan nama juga
            'tanggal' => $tanggal,
            'keterangan' => $request->keterangan[$murid->id], // ambil keterangan sesuai id siswa
        ]);
    }

        
    //      $request->validate([
    //     'tanggal' => 'required|date',
    //     'name' => 'required',
    //     'keterangan' => 'required',
    // ]);

    // foreach ($request->name as $muridId) {
    //     Absen::create([
    //         'name' => $muridId,
    //         'tanggal' => $request->tanggal,
    //         'keterangan' => $request->keterangan[$muridId],
    //     ]);
    // }
    // $request->validate([
    //     'tanggal' => 'required|date',
    //     'name' => 'required|array',
    //     'keterangan' => 'required|array',
    // ]);

    // foreach ($request->name as $name) {
    //     Absen::create([
    //         'name' => $name,
    //         'tanggal' => $request->tanggal,
    //         'keterangan' => $request->keterangan[$name],
    //     ]);
    // }
        return redirect('/dashboard/absen')->with('success', 'Absen hari ini telah dilakukan');

        }


//          $request->validate([
//         'tanggal' => 'required|date',
//         'murid_id' => 'required',
//         'keterangan' => 'required',
//     ]);

//     $tanggal = $request->tanggal;

//     foreach ($request->murid_id as $muridId) {
//         Absen::create([
//             'murid_id' => $muridId,
//             'tanggal' => $tanggal,
//             'keterangan' => $request->keterangan[$muridId],
//         ]);
//     }

//    return redirect('/dashboard/absen')->with('success', 'Absen hari ini telah disimpan.');
//     }

    /**
     * Display the specified resource.
     */
    public function show(Absen $absen)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Absen $absen)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Absen $absen)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Absen $absen)
    {
        //
    }
}
