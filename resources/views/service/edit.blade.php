<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistung bearbeiten</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item active" aria-current="page">
                            Leistungen
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->

                <form id="form" action="{{ route('service.update', $service->id) }}" method="post" enctype="multipart/form-data">
                    @csrf
                    @method('patch')

                    <div class="col-6 mb-3">
                        <x-input-text type="text" name="title" placeholder="Bezeichnung" :value="old('title', $service->title)" />
                        <x-input-error :messages="$errors->get('title')" class="mt-3" />
                    </div>
                    <div class="col-6 mb-3">
                        <x-input-text id="imageInput" type="file" name="service_images[]" multiple />
                        <x-input-error :messages="$errors->get('service_images')" class="mt-3" />

                        @error('service_images.*')
                            <ul class ="text-danger mt-3">
                                <li>{{ $errors->first('service_images.*') }}</li>
                            </ul>
                        @enderror

                    </div>
                    <div class="image-preview mb-3 d-flex" id="imagePreview">
                        Image Preview
                    </div>

                </form>
                <div class="row mt-3">

                    @foreach ($service->serviceImages as $image)
                        <div class="col relative">
                            <form action="{{ route('serviceImage.delete', $image) }}" method="POST"
                                style="position: absolute">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger"
                                    onclick="return confirm('Are you sure, you want to delete it?')"><i
                                        class="bi bi-trash3"></i></button>
                            </form>
                            <div style="width: 250px; height: 300px; overflow: hidden;">
                                <img src="{{ asset('storage/' . $image->path) }}" alt="shirt"
                                    style="width: 100%; object-fit: cover;">
                            </div>
                        </div>
                    @endforeach

                </div>

                <div class="mt-4">
                    <input type="submit" form="form" class="btn btn-primary" value="Speichern">
                </div>


            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

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

</x-admin-layout>
