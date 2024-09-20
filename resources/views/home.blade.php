<x-app-layout navid="main">

    <section id="banner" class="h-lvh bg-center bg-cover relative"
        style="background-image: url('{{ asset('storage/img/banner.jpg') }}');">

        <div class="absolute w-full h-full bg-gray-700 animate-fadeOut z-10"></div>

        <div class="flex flex-col justify-center items-center text-center min-h-screen text-gray-100">

            <div class="flex flex-col justify-center items-center flex-grow pt-20">
                <div class="z-10">
           
                    <div class="animate-fade m-5 opacity-0 flex justify-center">
                        <img class="w-full" src="{{asset('storage/img/d-logo.png')}}" alt="">
                    </div>
                    
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

            <div class="w-full md:w-2/3 lg:w-1/2 px-5 mx-auto pb-5">
                <div class="p-5"><h3 class="text-xl md:text-3xl text-gray-100">Unsere Leistungen:</h3></div>
            
                <div class="swiper titleSwiper rounded-lg">
                    <div class="swiper-wrapper">

                        {{-- slide 1 --}}
                        @foreach ($services as $service)
                        <div class="swiper-slide">

                            <div class="bg-gray-600 text-gray-100 text-xl md:text-3xl h-20 flex items-center rounded-lg mb-3">
                                <h3 class="px-16"> {{ $service->title }} </h3>
                            </div>

                            <div class="swiper contentSwiper rounded-lg">
                                <div class="swiper-wrapper mt-1">

                                    @foreach ($service->serviceImages as $image)

                                    <div class="swiper-slide">
                                        <img class="block w-full object-cover rounded-lg aspect-[3/4]" src="{{ asset('storage/' . $image->path) }}" alt="shirt">
                                    </div>
                                        
                                    @endforeach

                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div>
                        @endforeach
                    

                        {{-- slide 2  --}}

                        {{-- <div class="swiper-slide">
                            <div class="bg-gray-600 text-gray-100 text-xl md:text-3xl h-32 flex items-center">
                                <h3 class="px-16">Vereintrikos für das nächste Spiel</h3>                                
                            </div>

                            <div class="swiper contentSwiper">
                                <div class="swiper-wrapper mt-1">
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt" style="aspect-ratio:4/5;">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt" style="aspect-ratio:4/5;">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt" style="aspect-ratio:4/5;">
                                    </div>
                                    <div class="swiper-slide bg-gradient-to-br from-gray-800 to-gray-400">
                                        <img class="block w-full object-cover" src="{{ asset('storage/icons/white.png') }}"
                                            alt="shirt" style="aspect-ratio:4/5;">
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                            </div>

                        </div> --}}

                    </div>
                   
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-pagination"></div>
                    
                </div>


            </div>
        </div>
    </section>

    <section>
        <div class="text-gray-100 w-full bg-gradient-to-r from-cyan-800 to-cyan-500 py-16 px-5">

            <div class="lg:w-2/3 w-full mx-auto divide-y-2 divide-cyan-400 flex flex-col items-center text-base md:text-xl">

                <p class="lg:w-2/3 w-full leading-relaxed mb-6">
                    Ob für Firmen, Vereine, Schulen oder Einzelpersonen - wir bieten Ihnen erstklassige Flock- und Flexdruck für jede Gelegenheit. Verleihen Sie Ihrer Kleidung eine persönliche Note oder lassen Sie Ihre Gruppe im einheitlichen Look strahlen!
                </p>

                <div class="py-6 text-xl md:text-3xl lg:w-2/3 w-full text-center">Kontaktieren Sie uns jetzt!</div>

                <div class="pt-6 space-y-0 text-base md:text-xl lg:w-2/3 w-full flex justify-center">
                   <div class="flex flex-col">

                    <a href="tel:12345678" class="text-gray-100 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base md:text-xl">Tel: 12345678</a>
                    <a href="mailto:test@mail.de" class="text-gray-100 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base md:text-xl">E-Mail: test@mail.de</a>
                    <a href="https://www.instagram.com/" class="text-gray-100 hover:bg-gray-700 hover:text-white rounded-md px-3 py-2 text-base md:text-xl">Instagram: @wulfert_textile_print</a>

                   </div>
                </div>

               
            </div>

        </div>
    </section>

</x-app-layout>
