<x-app-layout>
   

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <x-welcomex />
            </div>

             <div class="">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                             <div class="p-4 sm:ml-64">
                    <div class="p-4 border-2 border-gray-200 border-dashed rounded-lg dark:border-gray-700">
                       
                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">

                                            {{-- <form action="store" method="POST"  enctype="multipart/form-data"> --}}
                                                {{-- <form method="POST" action="{{ route('store') }}" enctype="multipart/form-data"> --}}
                                                    {{-- <form action="{{ url('store') }}" method="POST" enctype="multipart/form-data"> --}}
                                                    {{-- <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data"> --}}
                                                        <form action="{{ route('siswa.store') }}" method="POST" enctype="multipart/form-data">
                                                    @csrf

                                                <div class="grid gap-6 mb-6 md:grid-cols-2">
                                                    <div class="px-4">
                                                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Anggota</label>
                                                        <input type="text" id="name" name="name" value="{{ old('name') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required  />
                                                    </div>
                                                    <div class="px-4">
                                                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                                                        <input type="text" id="nis" name="nis"  value="{{ old('nis') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                                     @error('nis')
                                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                    </div>
                                                    {{-- <div class="px-4">
                                                        <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                                        <input type="text" id="kelas" name="kelas"  value="{{ old('kelas') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                                    </div> --}}
                                                    
                                                    <div class="px-4">
                                                         <label for="kelas" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                                                         <select id="kelas"name="kelas" value="{{ old('kelas') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

                                                             <option>4</option>
                                                             <option>5</option>
                                                             <option>6</option>
                                                         </select>
                                                    </div>
                                                    
                                                    <div class="px-4">
                                                        <label for="pramuka" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">No Anggota Pramuka</label>
                                                        <input type="text" id="pramuka" name="pramuka"  value="{{ old('pramuka') }}" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required />
                                                     @error('pramuka')
                                                        <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                                                    @enderror
                                                    </div>
                                                    
                                                   
                                                    <div class="px-4 mt-6">
                                                    <button type="submit" class="text-gray-900 bg-gradient-to-r from-teal-200 to-lime-200 hover:bg-gradient-to-l hover:from-teal-200 hover:to-lime-200 focus:ring-4 focus:outline-none focus:ring-lime-200 dark:focus:ring-teal-700 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Simpan</button>
                                                     {{-- <button type="submit" class=" shadow-lg shadow-slate-600 mt-6 text-white bg-gradient-to-r from-cyan-500 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-cyan-300 dark:focus:ring-cyan-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2">Kirim</button> --}}
                                                    </div>
                                 
                                                  
                                                </div>
                                            </form>                 


          
                        </div>
                    </div>
                 
                </div>
                
                        </div>
            </div>

        </div>
        
    </div>
</x-app-layout>
