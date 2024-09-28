<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistung bearbeiten</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">

                        @foreach ($segments = request()->segments() as $key => $segment )
                        {{$segment}}
                    @endforeach

                        <li class="breadcrumb-item">
                            <a href="{{route('service.index')}}">Leistungen</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('service.show', $service->id)}}">Leistung</a>
                        </li>
                        <li class="breadcrumb-item">
                            Bearbeiten
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <div class="col-12">
                    <form id="form" action="{{ route('service.update', $service->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
    
                        <div class="col-lg-6 col-12 mb-3">
                            <x-input-text type="text" name="title" placeholder="Bezeichnung" :value="old('title', $service->title)" />
                            <x-input-error :messages="$errors->get('title')" class="mt-3" />
                        </div>
                        <div class="col-lg-6 col-12 mb-3">
                            <x-input-text id="imageInput" type="file" name="service_images[]" multiple />
                            <x-input-error :messages="$errors->get('service_images')" class="mt-3" />
    
                            @error('service_images.*')
                                <ul class ="text-danger mt-3">
                                    <li>{{ $errors->first('service_images.*') }}</li>
                                </ul>
                            @enderror
    
                        </div>
                        <div class="card overflow-x-auto">
                            <div class="card-body">
                                <div class="image-preview d-flex" id="imagePreview">
                                    Image Preview
                                </div>
                            </div>
                         
    
                        </div>
    
                    </form>
                    
    
                    <div class="card overflow-x-scroll mt-3">
                        <div class="card-body d-flex">
                            @foreach ($service->serviceImages as $image)
                            <div class="border" style="position: relative">
                                <form action="{{ route('serviceImage.delete', $image) }}" method="POST"
                                    style="position: absolute">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger"
                                        onclick="return confirm('Are you sure, you want to delete it?')"><i
                                            class="bi bi-trash3"></i></button>
                                </form>
    
                                <img class="image-preview" src="{{ asset('storage/' . $image->path) }}" alt="shirt" style="min-width: 100%; height: 250px; object-fit: cover;">
    
                            </div>
                        @endforeach
                        </div>
    
        
    
                    </div>
    
                    <div class="mt-4">
                        <input type="submit" form="form" class="btn btn-primary" value="Speichern">
                    </div>
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
                    img.classList.add('image-preview', 'me-2');
                    imagePreview.appendChild(img);
                }

                reader.readAsDataURL(file);
            }

            imagePreview.classList.remove('image-preview')

        });
    </script>

</x-admin-layout>
