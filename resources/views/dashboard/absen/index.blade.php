

<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcome />
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
    @endif
    

    {{-- tanggal --}}
      {{-- <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data"> --}}
        <div>
      
      <form id="isisemua" action="{{ route('absen.store') }}" method="POST" enctype="multipart/form-data">
      @csrf
    <div class="grid gap-4 mb-6 px-6 grid-cols-2">
        
        <div class="relative max-w-sm">
        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </div>
        <input id="datepicker-autohide" datepicker datepicker-autohide type="text" name="tanggal" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Pilih Tanggal" required>
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
                <th scope="col" class="px-8 py-3">
                    Keterangan
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
                   {{-- <input type="hidden" name="name[]" value="{{ $murid->id}}" required disabled> --}}
                </th>
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                  
                    <div class="flex flex-wrap">
                        <div class="flex items-center px-2 me-4">
                            <input id="green-radio{{ $murid->id }}" type="radio" value="Hadir" name="keterangan[{{ $murid->id }}]" class="w-4 h-4 text-green-600 bg-gray-100 border-gray-300 focus:ring-green-500 dark:focus:ring-green-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="green-radio{{ $murid->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Hadir</label>
                        </div>
                        
                        <div class="flex items-center px-2 me-4">
                            <input id="yellow-radio{{ $murid->id }}" type="radio" value="Izin" name="keterangan[{{ $murid->id }}]" class="w-4 h-4 text-yellow-400 bg-gray-100 border-gray-300 focus:ring-yellow-500 dark:focus:ring-yellow-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="yellow-radio{{ $murid->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Izin</label>
                        </div>
                        <div class="flex items-center px-2 me-4">
                            <input id="red-radio{{ $murid->id }}" type="radio" value="Alpha" name="keterangan[{{ $murid->id }}]" class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 dark:focus:ring-red-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="red-radio{{ $murid->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Alpha</label>
                        </div>
                          <div class="flex items-center px-2 me-4">
                            <input id="grey-radio{{ $murid->id }}" type="radio" value="Sakit" name="keterangan[{{ $murid->id }}]" class="w-4 h-4 text-purple-600 bg-gray-100 border-gray-300 focus:ring-purple-500 dark:focus:ring-purple-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="grey-radio{{ $murid->id }}" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">Sakit</label>
                        </div>
                        
                    </div>

                </th>


                  

            </tr>
      
            @endforeach

        </tbody>

    </table>
                                                     <div class="px-4 mt-4">
                                                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Simpan</button>
                                                     {{-- <button type="submit" class=" shadow-lg shadow-slate-600 mt-6 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button> --}}
                                                    </div>
    
    </form>
    </div>   
</div>

          
                    </div>
                 </div>

        </div>
    </div>
      

</x-app-layout>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('isisemua');
    const muridIds = @json($murids->pluck('id'));

    form.addEventListener('submit', function (e) {
        let valid = true;
        let unfilledNames = [];
        let index = 1;

        muridIds.forEach(function (id) {
            const radios = document.querySelectorAll(`input[name="keterangan[${id}]"]`);
            const isChecked = [...radios].some(radio => radio.checked);

            if (!isChecked) {
                valid = false;
                const row = document.querySelector(`#green-radio${id}`).closest('tr');
                const name = row.querySelector('th').innerText.trim();
                unfilledNames.push(`${index}. ${name}`);
                index++;
            }
        });

        if (!valid) {
            e.preventDefault();
            alert("Silakan pilih keterangan untuk anggota pramuka berikut:\n\n" + unfilledNames.join('\n'));
        }
    });
});
</script>
