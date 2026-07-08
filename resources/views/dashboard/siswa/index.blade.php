<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcomex />
            </div>

             <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                       
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    @if(session()->has('success'))
    <div class="flex items-center p-4 mb-4 text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800" role="alert">
      <svg class="flex-shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
      </svg>
      <span class="sr-only">Info</span>
      <div>
        {{ session('success') }}
      </div>
    </div>
    @elseif(session()->has('hapus'))
    

                        <div class="flex items-center p-4 mb-4 text-sm text-red-800 rounded-lg bg-red-50 dark:bg-gray-800 dark:text-red-400" role="alert">
                    <svg class="shrink-0 inline w-4 h-4 me-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5ZM9.5 4a1.5 1.5 0 1 1 0 3 1.5 1.5 0 0 1 0-3ZM12 15H8a1 1 0 0 1 0-2h1v-3H8a1 1 0 0 1 0-2h2a1 1 0 0 1 1 1v4h1a1 1 0 0 1 0 2Z"/>
                    </svg>
                    <span class="sr-only">Info</span>
                    <div>
                        {{ session('hapus') }}
                    </div>
                    </div>
    @endif
    

    <div class="grid gap-4 mb-6 grid-cols-2">
    <div class="px-8">
            <button  class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-purple-600 to-blue-500 group-hover:from-purple-600 group-hover:to-blue-500 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800">
                <a href="/dashboard/siswa/create" class="mb-2 mt-2">
                
                
                    <span class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
             ➕  Tambah Anggota Pramuka
                </span>
            </a>
        </div>
    <div class="grid gap-6 mb-6 grid-cols-2">
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

    </div>
    
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="p-4">
                    <div class="flex items-center">
                       No
                    </div>
                </th>
                <th scope="col" class="px-6 py-3">
                    Nama
                </th>
                <th scope="col" class="px-6 py-3">
                    NIS
                </th>
                <th scope="col" class="px-4 py-3">
                    No Anggota
                </th>
                <th scope="col" class="px-2 py-3">
                    Kelas
                </th>
                <th scope="col" class="px-2 py-3">
                    Action
                </th>
            
            </tr>
        </thead>
         <tbody>

                @foreach ($murids as $murid)
                    
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $loop->iteration }}
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $murid->name }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $murid->nis }}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $murid->pramuka }}
                </th>
                <th scope="row" class="px-2 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $murid->kelas }}
                    {{-- {{ $murid->created_at->translatedFormat('j F Y') }} --}}
                     {{-- {{ $murid->created_at->translatedFormat('j F Y H:i') }} --}}
                </th>
                <td class="px-6 py-4">
                    
                    {{-- <a href="{{ url('/dashboard/siswa/edit', $murid->id) }}" class="font-medium text-green-600 dark:text-blue-500 hover:underline px-1">Lihat</a> --}}
                    {{-- <a href="{{ url('/dashboard/siswa/edit', $murid->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Edit</a> --}}
                    <a href="{{ route('siswa.edit', $murid->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Edit</a>
                      <form action="/dashboard/siswa/{{ $murid->id }}" method="post">
                            @method('delete')
                            @csrf
                            <button class="font-medium text-red-600 dark:text-red-500 hover:underline" onclick="return confirm('apakah yakin ingin menghapus data')">Hapus
                                {{-- <a href="{{ url('/dashboard/hasil/show', $hasilsurvei->id) }}" class="font-medium text-red-600 dark:text-red-500 hover:underline px-1">Hapus</a> --}}
                            </form>
                
                   
                </td>
                
            </tr>
            @endforeach

        </tbody>

        {{-- <tbody>

                @foreach ($tanya as $pertanyaannya)
                    
                
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 hover:bg-gray-50 dark:hover:bg-gray-600">
                    <td class="w-4 p-4">
                        <div class="flex items-center">
                            {{ $loop->iteration }}
                    </div>
                </td>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    {{ $pertanyaannya->pertanyaan }}
                </th>
                <td class="px-6 py-4">
                    
                    <a href="{{ url('/dashboard/tanya/edit', $pertanyaannya->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline px-1">Edit</a>
                
                   
                </td>
            </tr>
            @endforeach

        </tbody> --}}
    </table>
</div>

          
                    </div>
                 </div>

        </div>
    </div>
</x-app-layout>
