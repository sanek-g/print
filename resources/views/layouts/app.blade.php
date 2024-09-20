<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Open+Sans:400,400italic,600,600italic,800,800italic">
    <link rel="shortcut icon" href="{{ asset('storage/icons/wico.ico') }}" type="image/x-icon">
    @vite('resources/css/app.css')
</head>

<body class="h-full min-h-screen flex flex-col" style="font-family: 'Open Sans'">

    <nav id="nav" class="bg-gray-800 fixed right-0 left-0 z-20 shadow-md -translate-y-full {{ $navid ?? 'show'}}">
        <div class="container mx-auto py-3 px-5 flex justify-between items-center">
            <div class="flex items-center">

                <a class="mr-10" href="/">
                    {{-- <img class="h-12 w-auto block lg:hidden" src="{{asset('storage/img/m-logo.png')}}" alt=""> --}}
                    <img class="h-12 w-auto" src="{{ asset('storage/img/d-logo.png') }}" alt="">
                </a>


                <div class="hidden md:block">
                    <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
                    <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                    <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                    <x-nav-link href="/admin" :active="request()->is('admin')">Admin</x-nav-link>
                </div>

            </div>
            <div class="hidden md:block">
                <div class="text-gray-300 text-xs md:text-sm lg:text-base">
                    <x-nav-link href="tel:12345678">Tel: 12345678</x-nav-link>
                    <x-nav-link href="mailto:test@mail.de">E-Mail: test@mail.de</x-nav-link>
                </div>
            </div>

        </div>

        <!-- Mobile menu button -->
        <div class="md:hidden absolute top-0 right-0 p-3">
            <x-menu-button id="menu-open">
                <svg class="close block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </x-menu-button>
        </div>

    </nav>

    <!-- Mobile menu -->
    <div class="hide fixed right-0 top-0 overflow-y-auto z-50 h-screen w-5/6 translate-x-0 bg-gradient-to-r from-cyan-800 to-cyan-500"
        id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">

            <div class="absolute top-0 right-0 p-3">

                <x-menu-button id="menu-close">
                    <svg class="block h-8 w-8" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor">
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



    <main class="flex-grow">
        {{ $slot }}
    </main>

    <footer class="bg-gray-800 shadow-md">

        <div class="container mx-auto py-3 px-5 flex flex-col md:flex-row  justify-between">

            <div class="flex flex-col">
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
            <div class="md:self-end self-start mt-2">
                <div class="flex text-gray-100">
                    <a href="https://www.linkedin.com/" rel="noopener noreferrer nofollow" target="_blank" class="rounded-lg h-8 w-8 ml-2 bg-[#0078d4] flex justify-center items-center"><i class="fa-brands fa-linkedin-in"></i></a>
                    <a href="https://www.facebook.com/" rel="noopener noreferrer nofollow" target="_blank" class="rounded-lg h-8 w-8 ml-2 bg-[#0078d4] flex justify-center items-center"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="https://www.instagram.com/" rel="noopener noreferrer nofollow" target="_blank" class="rounded-lg h-8 w-8 ml-2 bg-[#0078d4] flex justify-center items-center"><i class="fa-brands fa-instagram"></i></a>
                    <a href="https://x.com/" rel="noopener noreferrer nofollow" target="_blank" class="rounded-lg h-8 w-8 ml-2 bg-[#0078d4] flex justify-center items-center"><i class="fa-brands fa-x-twitter"></i></a>
                    <a href="https://www.youtube.com/" rel="noopener noreferrer nofollow" target="_blank" class="rounded-lg h-8 w-8 ml-2 bg-[#0078d4] flex justify-center items-center"><i class="fa-brands fa-youtube"></i></a>
                </div>
            </div>
        </div>


    </footer>

    @vite('resources/js/app.js')
</body>

</html>
