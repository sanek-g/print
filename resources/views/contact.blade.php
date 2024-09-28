<x-app-layout>

    <section>
        <div class="pt-48 pb-36 bg-fixed bg-center bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('storage/img/banner.jpg') }}');">
            <div class="flex justify-center">
                <img class="w-1/4 min-w-40" src="{{ asset('storage/img/d-logo.png') }}" alt="">
            </div>
        </div>
    </section>

    <section class="flex flex-col justify-center items-center bg-slate-600 text-gray-100 py-16">

        <div class="w-[50%] p-6 m-6 bg-slate-800 rounded-md">
            <h3 class="text-3xl">Häufig gestelle Fragen</h3>
        </div>


        <div id="accordion" class="w-[50%] rounded-md overflow-hidden flex flex-col gap-1">
            @foreach ($faqs as $faq)
            <div class="item">
                <div class="header p-6 bg-slate-800 font-bold flex justify-between items-center cursor-pointer">
                    <div>
                        {{ $faq->question }}
                    </div>
                    <div>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 activeIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 15.75 7.5-7.5 7.5 7.5" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="size-6 inactiveIcon">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m19.5 8.25-7.5 7.5-7.5-7.5" />
                        </svg>

                    </div>
                </div>
                <div class="content bg-slate-700 transition-all duration-300 max-h-0 overflow-hidden">
                  <div class="p-6">
                    {{ $faq->answer }}
                  </div>
                </div>
            </div>
            @endforeach
         
        </div>

    </section>

    <section>

        <div class="py-16 px-3 bg-white flex flex-col justify-center items-center">



            <div class="bg-white w-full lg:w-1/3 shadow-xl border rounded p-5">

                @if (session('message'))
                    <div class="rounded border p-3 bg-green-300 mb-3">
                        {{ session('message') }}
                    </div>
                @endif

                <h1 class="text-3xl font-medium">Nachricht senden</h1>

                <form class="space-y-5 mt-5 flex flex-col" method="POST" action="{{ route('contact.form.send') }}"
                    enctype="multipart/form-data">
                    @csrf

                    <input name="name" type="text" value="{{ old('name') }}"
                        class="w-full h-12 border border-gray-800 rounded px-3 @error('name') border-red-500 @enderror"
                        placeholder="Vorname, Nachname" />

                    @error('name')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="email" type="text" value="{{ old('email') }}"
                        class="w-full h-12 border border-gray-800 rounded px-3 @error('email') border-red-500 @enderror"
                        placeholder="E-Mail" />

                    @error('email')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <textarea name="text" rows="5"
                        class="w-full border border-gray-800 rounded px-3 @error('text') border-red-500 @enderror"
                        placeholder="Ihre Nachricht ...">{{ old('text') }}</textarea>

                    @error('text')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <input name="image" id="imageInput" type="file"
                        class="w-full border border-gray-800 rounded @error('image') border-red-500 @enderror" />

                    @error('image')
                        <p class="text-red-500">{{ $message }}</p>
                    @enderror

                    <div class="image-preview mb-3 d-flex" id="imagePreview" style="">
                        Image Preview
                    </div>


                    <button type="submit"
                        class="text-center w-1/3 self-end bg-blue-900 rounded-md text-white py-3 font-medium">Senden</button>
                </form>
            </div>
        </div>

    </section>

    <script>
        let items = document.querySelectorAll('#accordion .item')

        const openAccordion = (accordion) => {
            const content = accordion.querySelector(".content");
            accordion.classList.add("active");
            content.style.maxHeight = content.scrollHeight + "px";
        };

        const closeAccordion = (accordion) => {
            const content = accordion.querySelector(".content");
            accordion.classList.remove("active");
            content.style.maxHeight = null;
        };

        items.forEach((accordion) => {
            const intro = accordion.querySelector(".header");
            const content = accordion.querySelector(".content");

            intro.onclick = () => {
                if (content.style.maxHeight) {
                    closeAccordion(accordion);
                } else {
                    items.forEach((accordion) => closeAccordion(accordion));
                    openAccordion(accordion);
                }
            };
        });
    </script>


    <script>
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');

        imageInput.addEventListener('change', function(event) {
            
            const files = event.target.files; // Mehrere Bilder
            imagePreview.innerHTML = ''; // Clear existing content

            for (const file of files) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.classList.add('image-preview', 'me-3');
                    imagePreview.appendChild(img);
                }

                reader.readAsDataURL(file);
            }

            imagePreview.classList.remove('image-preview')

        });
    </script>


</x-app-layout>
