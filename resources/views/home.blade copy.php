<x-layout.app>

    <section id="banner" class="h-lvh bg-center bg-cover relative"
        style="background-image: url('{{ asset('storage/img/banner.jpg') }}');">

        <div class="absolute w-full h-full bg-gray-700 animate-fadeOut z-10"></div>

        <div class="flex flex-col justify-center items-center text-center min-h-screen text-gray-100">

            <div class="flex flex-col justify-center items-center flex-grow pt-20">
                <div class="z-10">
                    <!-- Obere Linie -->
                    {{-- <div class="relative">
                        <div class="absolute top-0 left-0 border-t-2 border-gray-100 animate-line"></div>
                        <!-- Titel -->
                    </div> --}}

                    <div class="animate-fade m-5 opacity-0 flex justify-center">
                        <img class="w-full" src="{{asset('storage/img/d-logo.png')}}" alt="">
                    </div>
                    

                    {{-- <h2 class="font-bold text-sm md:text-lg xl:text-3xl animate-fade m-5 opacity-0">
                        Wulfert <span class="uppercase font-normal">Textile print</span>
                    </h2> --}}

                    {{-- <div class="relative">
                        <!-- Untere Linie -->
                        <div class="absolute bottom-0 right-0 border-t-2 border-gray-100 animate-line"></div>
                    </div> --}}
                </div>

               
            </div>
            <div class="px-3 my-5">
                <p class="uppercase tracking-wider text-xs md:text-sm xl:text-lg">
                    Hochwertiger Flock- und Flexdruck<br>für alle Anlässe
                </p>
            </div>

            <div class="h-64">
                <a href="#main" id="arrow"
                    class="uppercase tracking-widest flex flex-col justify-center items-center"><span>erfahre
                        mehr</span>
                    <span class="animate-bounce pt-5"><svg xmlns="http://www.w3.org/2000/svg"
                            xmlns:xlink="http://www.w3.org/1999/xlink" width="30px" height="30px" viewBox="0 0 30 30"
                            zoomAndPan="disable" preserveAspectRatio="none">
                            <style type="text/css">
                                <![CDATA[
                                line {
                                    stroke: #ffffff;
                                    stroke-width: 3;
                                }
                                ]]>
                            </style>
                            <line x1="0" y1="15" x2="15" y2="30" />
                            <line x1="30" y1="15" x2="15" y2="30" />
                            <line x1="15" y1="30" x2="15" y2="0" />
                        </svg></span>
                </a>
            </div>


        </div>



    </section>

    <section id="main">
        <div class="flex justify-center items-center text-gray-100 w-full bg-gradient-to-r from-cyan-800 to-cyan-500 py-16 px-5">

            <div class="divide-y-2 divide-cyan-400">
                <h3 class="mb-6 text-xl md:text-3xl">Warum Wulfert Textil Print?</h3>
                <ul class="pt-6 space-y-4 text-base md:text-xl">
                    <li class="flex items-center"><img class="mr-3" width="32px" height="32px"
                            src="{{ asset('storage/icons/check.svg') }}" alt="check"><span>Moderne Flock- und
                            Flexdruck-Techniken</span></li>
                    <li class="flex items-center"><img class="mr-3" width="32px" height="32px"
                            src="{{ asset('storage/icons/check.svg') }}" alt="check"><span>Schnelle Umsetzung und
                            zuverlässiger Service</span></li>
                    <li class="flex items-center"><img class="mr-3" width="32px" height="32px"
                            src="{{ asset('storage/icons/check.svg') }}" alt="check"><span>Individuelle Beratung und
                            maßgeschneiderte Lösungen</span></li>
                </ul>
            </div>

        </div>
    </section>

    <section>

        <div class="bg-gradient-to-br from-gray-800 to-gray-400">

            <div class="lg:w-2/3 w-full container mx-auto">

                <div class="swiper titleSwiper">
                    <div class="swiper-wrapper">

                        {{-- slide 1 --}}
                        <div class="swiper-slide">
                            <div class="bg-gray-600 text-gray-100 text-xl md:text-3xl h-32 flex items-center">
                                <h3 class="px-16">Firmenbekleidung mit Ihrem Logo</h3>
                            </div>

                            <div class="swiper contentSwiper h-full">
                                <div class="swiper-wrapper mt-1">
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                        {{-- slide 2  --}}
                        <div class="swiper-slide">
                            <div class="bg-gray-600 text-gray-100 text-xl md:text-3xl h-32 flex items-center">
                                <h3 class="px-16">Vereintrikos für das nächste Spiel</h3>                                
                            </div>

                            <div class="swiper contentSwiper">
                                <div class="swiper-wrapper mt-1">
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                        {{-- slide 3 --}}
                        <div class="swiper-slide">
                            <div class="bg-gray-600 text-gray-100 text-xl md:text-3xl h-32 flex items-center">
                                <h3 class="px-16">Schul-T-Shirts für Klassenfahrten und Abschlussfeier</h3>
                            </div>

                            <div class="swiper contentSwiper">
                                <div class="swiper-wrapper mt-1">
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>

                    </div>
                   
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    
                </div>


            </div>
        </div>





        <div
            class="flex justify-center items-center text-gray-100 w-full bg-gradient-to-r from-cyan-800 to-cyan-500 py-20">
        </div>




        <div class="flex flex-col md:flex-row">
            <div class="md:w-1/3 w-full bg-gray-600 text-gray-100 text-lg md:text-2xl flex justify-center items-center p-3">
                <p>Vereintrikos für das nächste Spiel</p>
            </div>
            <div class="md:w-2/3 w-full">

                <div class="swiper mySwiper bg-gradient-to-br from-gray-800 to-gray-400">
                    <div class="swiper-wrapper">
                        <div class="swiper-slid">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                    </div>
                </div>

            </div>

        </div>


        <div
            class="flex justify-center items-center text-gray-100 w-full bg-gradient-to-r from-cyan-800 to-cyan-500 py-20">
        </div>


        <div class="flex flex-col-reverse md:flex-row">
            <div class="md:w-2/3 w-full">

                <div class="swiper mySwiper bg-gradient-to-br from-gray-800 to-gray-400">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                        <div class="swiper-slide">
                            <img class="block w-full h-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                alt="shirt">
                        </div>
                    </div>
                </div>

            </div>
            <div class="md:w-1/3 w-full bg-gray-600 text-gray-100 text-lg md:text-2xl flex justify-center items-center p-3">
                <p>Schul-T-Shirts für Klassenfahrten und Abschlussfeier</p>
            </div>
        </div>




    </section>

</x-layout.app>
