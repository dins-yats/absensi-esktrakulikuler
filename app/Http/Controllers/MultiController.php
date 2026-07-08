<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Murid;
use App\Models\Absen;
use Illuminate\Support\Facades\Auth;

class MultiController extends Controller
{
    public function index(Request $request) 
    {
    //     if (Auth::id())
    //      {
    // $usertype = Auth::user()->usertype;

    // if($usertype == 'user') {
    //     return view('dashboard');

    // } else if($usertype == 'admin')
    //  {
    //     return view('admin.index');
    // }
    //  else if($usertype == 'manager') 
    //  {
    //     return view('manager.index');
    // } else 
    // {
    //     return redirect()->back();
    // }
    //     }

    if (Auth::check()) {
    $usertype = Auth::user()->usertype;

    if ($usertype == 'user') {
          $muridd = murid::count();
        return view('dashboard', compact('muridd'));
    } elseif ($usertype == 'admin') {
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
    } elseif ($usertype == 'manager') {
        return view('manager.index');
    } else {
        return redirect()->back();
    }
} else {
    return redirect()->route('login');
}
    }
}
