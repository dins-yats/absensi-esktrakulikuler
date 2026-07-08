<?php

use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Http\Controllers\Inertia\UserProfileController;
use App\Http\Controllers\MultiController;
use App\Http\Controllers\DatasiswaController;
use App\Http\Controllers\AbsensiswaController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\RekapabsenController;
use App\Http\Controllers\LogharianController;


Route::get('/', function () {
    return view('awal');
});

Route::get('/dokumentasi', function () {
    return view('dokumentasi');
});

Route::get('/logharian',[LogharianController::class, 'index']);

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified',
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {

    
       Route::get('/dashboard', [MultiController::class, 'index'])->name('dashboard');
       

       
        Route::get('/dashboard/admin/exportdata', [AdminController::class, 'exportdata']);
       Route::resource('/dashboard/admin', AdminController::class);
       Route::resource('/dashboard/siswa', DatasiswaController::class);
        //   Route::get('/dashboard/siswa/edit{id}',[DatasiswaController::class, 'edit']);
        //   Route::post('/dashboard/siswa/store',[DatasiswaController::class, 'store']);
       //    Route::get('/dashboard/siswa', [DatasiswaController::class, 'create']);
       // Route::get('/dashboard/siswa, DatasiswaController::class, 'tambah');
       
       Route::resource('/dashboard/absen', AbsensiswaController::class);
        // Route::get('/dashboard/rekapabsen/exportdata', [RekapabsenController::class, 'exportdata']);
       Route::resource('/dashboard/rekapabsen', RekapabsenController::class);
    


    });

                // Route::middleware([
                // 'auth:sanctum',
                // config('jetstream.auth_session'),
                // 'verified',
                // ])->group(function () {
                //     Route::get('home', [MultiController::class, 'index'])->name('home');
                // });