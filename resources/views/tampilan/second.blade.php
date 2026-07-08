<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
    {{-- <script src="../path/to/flowbite/dist/flowbite.min.js"></script> --}}
    @vite(['resources/css/app.css','resources/js/app.js'])

    <title>Eskul Pramuka</title>
</head>
{{-- <body class="bg-slate-950"> --}}
<body class="bg-cover bg-center bg-no-repeat bg-[url('/img/bg1.jpg')] bg-gray-700 bg-blend-multiply">
    
    @include('sidebagian.secondnavbar')
    <div class="container ">
        @yield('container')
    </div>
    
    @include('sidebagian.footer')


</body>
</html>