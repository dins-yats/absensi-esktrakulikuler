@extends('tampilan.second')

@section('container')

<section id="greed" class="bg-cover bg-center bg-no-repeat bg-[url('/img/bg3.jpg')] bg-gray-700 bg-blend-multiply">
  
  <div class="max-w-screen-md mx-auto text-center py-14">
    <h2 class="mb-4 text-3xl font-extrabold tracking-tight text-white md:text-5xl xl:text-5xl">Dokumentasi Ekstrakulikuler</h2>
  </div>

  <div id="custom-controls-gallery" class="relative max-w-screen-md mx-auto" data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative overflow-hidden rounded-lg h-56 md:h-96">
      <!-- Item 1 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-1.jpg"
             class="block w-full h-full object-cover object-center"
             alt="">
      </div>
      <!-- Item 2 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-2.jpg"
             class="block w-full h-full object-cover object-center"
             alt="">
      </div>
      <!-- Item 3 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-3.jpg"
             class="block w-full h-full object-cover object-center"
             alt="">
      </div>
      <!-- Item 4 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-4.jpg"
             class="block w-full h-full object-cover object-center"
             alt="">
      </div>
      <!-- Item 5 -->
      <div class="hidden duration-700 ease-in-out" data-carousel-item>
        <img src="https://flowbite.s3.amazonaws.com/docs/gallery/square/image-5.jpg"
             class="block w-full h-full object-cover object-center"
             alt="">
      </div>
    </div>

    <!-- Controls -->
    <div class="flex justify-center items-center pt-4 space-x-4">
      <button type="button"
              class="flex justify-center items-center h-10 w-10 rounded-full bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
              data-carousel-prev>
        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M15 19l-7-7 7-7"/>
        </svg>
        <span class="sr-only">Previous</span>
      </button>
      <button type="button"
              class="flex justify-center items-center h-10 w-10 rounded-full bg-gray-700 hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
              data-carousel-next>
        <svg class="w-5 h-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none"
             viewBox="0 0 24 24" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                d="M9 5l7 7-7 7"/>
        </svg>
        <span class="sr-only">Next</span>
      </button>
    </div>
  </div>


   
  
</section>

<a href="#home" class="fixed z-[9999] bottom-4 right-4 h-10 w-10 p-2 bg-amber-400 rounded-full hover:animate-pulse opacity-90" id="balikatas">
  <span>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="opacity-50"><path d="M13.0001 7.82843V20H11.0001V7.82843L5.63614 13.1924L4.22192 11.7782L12.0001 4L19.7783 11.7782L18.3641 13.1924L13.0001 7.82843Z"></path></svg>
  </span>
</a>
@endsection