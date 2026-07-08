<x-app-layout>
    <div class="py-12">
        <div class="max-w-8xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
            </div>

            <div class="p-4 sm:ml-64">
                <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <h2 class="text-xl font-semibold mb-4">📊 Rekap Absensi Anggota Pramuka</h2>

                        {{-- Form Pencarian --}}
                        <div class="grid gap-6 mb-6 grid-cols-2">
                            <div class="px-4 mt-2"></div>
                            <div>
                                <form method="get" class="flex items-center max-w-sm mx-auto mb-3">   
                                    @csrf
                                    <label for="simple-search" class="sr-only">Search</label>
                                    <div class="relative w-full">
                                        <input type="text" name="keyword" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg block w-full ps-3 p-2.5" placeholder="Search..." required />
                                    </div>
                                    <button type="submit" class="p-2.5 ms-2 text-sm font-medium text-white bg-blue-700 rounded-lg hover:bg-blue-800">
                                        <svg class="w-4 h-4" fill="none" viewBox="0 0 20 20" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 111 8a7 7 0 0114 0Z"/>
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </div>

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
                         <p class=" text-yellow-600 p-4 text-xs">Keterangan : 
                            <br>
                            H = Hadir
                            <br>
                            S = Sakit
                            <br>
                            A = Alpha
                            <br>
                            I = Izin
                         </p>
                    </div>   
                </div>
            </div>
        </div>
    </div>
</x-app-layout>