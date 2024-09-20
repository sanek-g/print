<x-app-layout>

    <section>
        <div class="pt-48 pb-36 bg-fixed bg-center bg-no-repeat bg-cover"
            style="background-image: url('{{ asset('storage/img/banner.jpg') }}');">
            <div class="flex justify-center">
                <img class="w-1/4 min-w-40" src="{{ asset('storage/img/d-logo.png') }}" alt="">
            </div>
        </div>

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

                    <div class="image-preview mb-3 d-flex" id="imagePreview">
                        Image Preview
                    </div>


                    <button type="submit"
                        class="text-center w-1/3 self-end bg-blue-900 rounded-md text-white py-3 font-medium">Senden</button>
                </form>
            </div>
        </div>

    </section>

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
