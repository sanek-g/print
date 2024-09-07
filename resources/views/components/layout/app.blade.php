<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
    <link rel="shortcut icon" href="{{asset('storage/icons/wico.ico')}}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="h-full" style="font-family: 'Open Sans'">

  <nav id="nav" class="bg-gray-800 fixed right-0 left-0 z-10 shadow-md -translate-y-full">
    <div class="container mx-auto p-3 flex md:justify-around items-center">
      <div class="flex items-center">
        
          <a class="mr-10" href="/">
            <img class="h-12 w-auto block lg:hidden" src="{{asset('storage/img/m-logo.png')}}" alt="">
            <img class="h-12 w-auto hidden lg:block" src="{{asset('storage/img/d-logo.png')}}" alt="">
          </a>
          
        
        <div class="hidden md:block">
          <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
          <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
          <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        </div>
       
      </div>
      <div class="grow md:grow-0">
        <div class="text-gray-300 text-xs md:text-sm lg:text-base inline-flex flex-col md:flex-row md:divide-x-2 divide-x-0 divide-y-2 md:divide-y-0">
          <span class="p-1 md:py-0">Tel: 12312121</span>
          <span class="p-1 md:py-0">E-Mail: sdasd@svsdv.de</span>
        </div>
      </div>
     
    </div>

    <!-- Mobile menu button -->
    <div class="md:hidden absolute top-0 right-0 p-3">
      <x-menu-button id="menu-open">
        <svg class="close block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
          <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
        </svg>
      </x-menu-button>
    </div>

  </nav>

   <!-- Mobile menu -->
  <div class="hide fixed right-0 top-0 overflow-y-auto z-50 h-screen w-5/6 translate-x-0 bg-gradient-to-r from-cyan-800 to-cyan-500" id="mobile-menu">
    <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">

      <div class="absolute top-0 right-0 p-3">

        <x-menu-button id="menu-close">
          <svg class="block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
          </svg>
        </x-menu-button>

      </div>

      <div class="flex flex-col pt-16">

        {{-- <span class="mt-14"></span> --}}
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
        <span class="mt-2"></span>
        <x-nav-link href="/impressum" :active="request()->is('impressum')">Impressum</x-nav-link>
        <x-nav-link href="/agb" :active="request()->is('agb')">AGB</x-nav-link>
        <span class="mt-2"></span>
        <x-nav-link href="tel:12345678">Tel: 12345678</x-nav-link>
        <x-nav-link href="mailto:test@mail.de">E-Mail: test@mail.de</x-nav-link>
      </div>

    </div>
  </div>



  <main>
    {{$slot}}
  </main>

    @vite('resources/js/app.js')
</body>

</html>
