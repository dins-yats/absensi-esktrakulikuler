<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use Illuminate\Http\Request;

class DatasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $keyword = $request->keyword;
          return view('dashboard.siswa.index', [
            'murids' =>murid::
            where('name', 'LIKE', '%'.$keyword.'%')
            ->orWhere('nis', 'LIKE', '%'.$keyword.'%')
            ->orWhere('kelas', 'LIKE', '%'.$keyword.'%')
            ->paginate(20)->withQueryString()
       
    
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('dashboard.siswa.create', [
                
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //  $request->validate([
        //     'name'            => 'required|max:255',
        //      'nis'   => 'required|numeric|max_digits:16',
        //     'kelas'           => 'required',
            
        // ]);
        


        // $name           = $request->name;
        // $nis            = $request->nis;
        // $kelas          = $request->kelas;
       


        // $data = new Murid;
        // $data->name           = $name;
        // $data->nis            = $nis;
        // $data->kelas          = $kelas;
        // $data->save();

        // return redirect('/dashboard/siswa')->with('success', 'Survei Telah Ditambahkan');
         $request->validate([
        'name'  => 'required|max:255',
        'nis'   => 'required|numeric|max_digits:10|unique:murids,nis',
        'kelas' => 'required',
        'pramuka'   => 'required|numeric|max_digits:17|unique:murids,pramuka',
    ],
     [
        'nis.unique' => 'NIS sudah terdaftar.',
        'nis.required' => 'NIS wajib diisi.',
        'nis.numeric' => 'NIS harus berupa angka.',
        'pramuka.unique' => 'No Anggota sudah terdaftar.',
        'pramuka.required' => 'No Anggota wajib diisi.',
        'pramuka.numeric' => 'No Anggota harus berupa angka.',
    ]);

    
    

    $data = new Murid;
    $data->name  = $request->name;
    $data->nis   = $request->nis;
    $data->kelas = $request->kelas;
    $data->pramuka = $request->pramuka;
    $data->save();

    return redirect('/dashboard/siswa')->with('success', 'Data Anggota Berhasil Ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Murid $murid)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Murid $murid, $id )
    {
        //  return view('dashboard.siswa.edit', ['murid' => $murid]);
         $murid = Murid::find($id);
        return view('dashboard.siswa.edit', ['murid' => $murid]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Murid $murid, $id)
    {
        //    dd($request->all());

         $murid = Murid::find($id);
    
        
         
         $request->validate([
             'name'  => 'required|max:255',
             'nis'   => 'required|numeric|max_digits:10|unique:murids,nis,' .$murid->id,
             'kelas' => 'required',
             'pramuka'   => 'required|numeric|max_digits:17|unique:murids,pramuka,' .$murid->id,
            ]);
            
            
            
            $murid =murid::find($murid->id);
            
    $murid->name  = $request->name;
    $murid->nis   = $request->nis;
    $murid->kelas = $request->kelas;
    $murid->pramuka = $request->pramuka;
    $murid->save();
    
    return redirect('/dashboard/siswa')->with('success', 'Data Anggota Berhasil Diubah.');
}
// $murid = Murid::find($murid->id);



// $murid->name  = $request->name;
// $murid->nis   = $request->nis;
// $murid->kelas = $request->kelas;
// $murid->save();

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Murid $murid, $id)
    {
         Murid::destroy($id);
        // User::destroy($user->id); 
        return redirect('/dashboard/siswa')->with('hapus', 'Data Anggota Telah Dihapus');
    }
}
