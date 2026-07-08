@extends('tampilan.second')

@section('container')
    <section id="greed" class="bg-cover bg-center bg-no-repeat bg-[url('/img/bg1.jpg')] bg-gray-700 bg-blend-multiply">
  <div class="max-w-screen-md mx-auto text-center py-14">
    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-white md:text-5xl xl:text-5xl">
      Log Kehadiran
    </h2>
  </div>


  <div class="max-w-7xl mx-auto sm:px-6 lg:px-2">
             <div class="p-4 sm:ml-30">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                     
                       
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                               <h2 class="text-xl font-semibold text-white mb-4">📊 Log Kehadiran Anggota</h2>
                                <div class="grid gap-6 mb-6 grid-cols-2">

                                     <div class="px-4 mt-2">
                                                    
                                    </div>
                                        
                                        
                                        <div>
                                            <form method="get" class="flex items-center max-w-sm mx-auto mb-3">   
                                                @csrf
                                                <label for="simple-search" class="sr-only">Search</label>
                                                    <div class="relative w-full">
                                                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                                            {{-- <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 20">
                                                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5v10M3 5a2 2 0 1 0 0-4 2 2 0 0 0 0 4Zm0 10a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm12 0a2 2 0 1 0 0 4 2 2 0 0 0 0-4Zm0 0V6a3 3 0 0 0-3-3H9m1.5-2-2 2 2 2"/>
                                                            </svg> --}}
                                                        </div>
                                                                <input type="text" name="keyword" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search..." required />
                                                    </div>
                                                                <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                                                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                                                                    </svg>
                                                                    <span class="sr-only">Search</span>
                                                                </button>
                                            </form>
                                        </div>
                                </div>
    

   
                @if($murids->count())

                
                        {{-- Tabel Rekap --}}
                        <table class="w-full text-sm text-gray-800 dark:text-gray-400 border border-gray-300">
                            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th rowspan="2" class="text-center px-2 py-1 border">No</th>
                                    <th rowspan="2" class="text-center px-2 py-1 border">Nama</th>
                                    @foreach($tanggalList as $tanggal)
                                      <th scope="col" rowspan="2" class="px-2 py-3 ">
                                    {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                                     </th>
                                        {{-- <th rowspan="2" class="text-center px-1 py-1 text-[10px] whitespace-nowrap border">
                                            {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                                        </th> --}}
                                    @endforeach
                                    <th colspan="4" class="text-center px-2 py-1 border">Keterangan</th>
                                </tr>
                                <tr>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">H</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">I</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">S</th>
                                    <th class="text-center w-6 px-1 py-1 text-[10px] border">A</th>
                                </tr>
                            </thead>

                            <tbody>
                                @foreach($murids as $murid)
                                    @php
                                        $hadir = 0; $izin = 0; $sakit = 0; $alpha = 0;
                                    @endphp
                                    <tr class="bg-white border-b hover:bg-gray-50">
                                        <td class="text-center px-2 py-1 border">{{ $loop->iteration }}</td>
                                        <td class="px-2 py-1 border">{{ $murid->name }}</td>

                                        @foreach($tanggalList as $tanggal)
                                            @php
                                                $absen = $absensi->first(fn($a) => $a->murid_id == $murid->id && $a->tanggal == $tanggal);
                                                $ket = $absen->keterangan ?? '-';
                                                if ($ket === 'Hadir') $hadir++;
                                                elseif ($ket === 'Izin') $izin++;
                                                elseif ($ket === 'Sakit') $sakit++;
                                                elseif ($ket === 'Alpha') $alpha++;
                                            @endphp
                                            <td class="text-center text-xs px-1 py-1 border">
                                                {{ $ket[0] ?? '-' }}
                                            </td>
                                            {{-- <td class="text-center text-xs px-1 py-1 border">
                                                {{ $ket[0] ?? '-' }}
                                            </td> --}}
                                        @endforeach

                                        <td class="text-center text-xs border">{{ $hadir }}</td>
                                        <td class="text-center text-xs border">{{ $izin }}</td>
                                        <td class="text-center text-xs border">{{ $sakit }}</td>
                                        <td class="text-center text-xs border">{{ $alpha }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                      
                        </table>
                         <p class="bg-white text-yellow-600 p-4 text-xs">Keterangan : 
                            <br>
                            H = Hadir
                            <br>
                            S = Sakit
                            <br>
                            A = Alpha
                            <br>
                            I = Izin
                         </p>
    {{-- <table class="w-full text-sm text-left rtl:text-right text-gray-800 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">No</th>
                <th scope="col" class="px-2 py-3">Nama</th>
                @foreach($tanggalList as $tanggal)
                    <th scope="col" class="px-2 py-3">
                        {{ \Carbon\Carbon::parse($tanggal)->format('d M Y') }}
                    </th>
                @endforeach
            </tr>
        </thead>
        <tbody>
            @foreach($murids as $murid)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">{{ $loop->iteration }}</td>
                    <td class="w-4 p-4">{{ $murid->name }}</td>
                    @foreach($tanggalList as $tanggal)
                        @php
                            $absen = $absensi->first(function($a) use ($murid, $tanggal) {
                                return $a->murid_id == $murid->id && $a->tanggal == $tanggal;
                            });
                        @endphp
                        <td class="w-4 p-4">
                            @if($absen)
                                <span class="inline-block px-2 py-1 rounded text-xs font-semibold text-gray-800">
                                    {{ $absen->keterangan }}
                                </span>
                            @else
                                <span class="text-gray-400">-</span>
                            @endif
                        </td>
                    @endforeach
                </tr>
            @endforeach
        </tbody>
    </table> --}}
@else
    <p class="text-center text-gray-500 mt-4">
        Silakan masukkan kata kunci untuk menampilkan data.
    </p>
@endif
   
                        </div>   
                    </div>

          
                </div>
        </div>


</section>

@endsection
