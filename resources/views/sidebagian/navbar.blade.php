




<nav class="bg-transparent shadow-lg shadow-slate-800 border-gray-200 dark:bg-gray-900">
  <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
    <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
       <img src="/img/macangsakti.png" class="h-6 me-2 sm:h-7" alt="Flowbite Logo" />
        <span class="self-center text-2xl font-semibold whitespace-nowrap text-yellow-400 dark:text-white">SDN Macang Sakti</span>
    </a>
    <button data-collapse-toggle="navbar-default" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-yellow-400 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-default" aria-expanded="false">
        <span class="sr-only">Open main menu</span>
        <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
        </svg>
    </button>
    <div class="hidden w-full md:block md:w-auto" id="navbar-default">
      <ul class="font-medium flex flex-col p-4 md:p-0 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 rtl:space-x-reverse md:mt-0 md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
        <li>
          <a href="/" class=" {{ Request::is('/') ? 'visited:text-amber-400 bg-blue-600' : ''}} block py-2 px-3 text-zinc-200 rounded md:bg-transparent  hover:bg-slate-700 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Home</a>
        </li>
        <li>
          <a href="dokumentasi" class=" {{ Request::is('Ekstrakulikuler') ? 'visited:text-amber-400 bg-blue-600' : ''}} block py-2 px-3 text-zinc-200 rounded md:bg-transparent  hover:bg-slate-700 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">Ekstrakurikuler</a>
        </li>


        @if (Route::has('login'))
        <li>
            @auth
            <a href="{{ url('/dashboard') }}" 
            class="block py-2 px-3 text-zinc-200 rounded hover:bg-slate-700 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
            Dashboard
            </a>
            @else
            <a href="{{ url('/login') }}" 
            class="block py-2 px-3 text-zinc-200 rounded hover:bg-slate-700 md:hover:bg-transparent md:border-0 md:hover:text-yellow-400 md:p-0 dark:text-white md:dark:hover:text-blue-500 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent">
            Login
            </a>
            {{-- @endif   --}}
            @endauth
        </li>
        @endif
                           
                        
      </ul>
    </div>
  </div>
</nav>
