<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Filma bearbeiten</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{ route('company.index') }}">Firma</a>
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
                    <form id="form" action="{{ route('company.update', $company->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Name</label>
                            <x-input-text type="text" name="name" placeholder="Name" :value="old('name', $company->name)" />
                            <x-input-error :messages="$errors->get('name')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Boss Vorname</label>
                            <x-input-text type="text" name="director_name" placeholder="Boss Vorname"
                                :value="old('director_name', $company->director_name)" />
                            <x-input-error :messages="$errors->get('director_name')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Boss Nachname</label>
                            <x-input-text type="text" name="director_lastname" placeholder="Boss Nachname"
                                :value="old('director_lastname', $company->director_lastname)" />
                            <x-input-error :messages="$errors->get('director_lastname')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Straße</label>
                            <x-input-text type="text" name="street" placeholder="Straße" :value="old('street', $company->street)" />
                            <x-input-error :messages="$errors->get('street')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">PLZ</label>
                            <x-input-text type="text" name="zip" placeholder="PLZ" :value="old('zip', $company->zip)" />
                            <x-input-error :messages="$errors->get('zip')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Ort</label>
                            <x-input-text type="text" name="city" placeholder="Ort" :value="old('city', $company->city)" />
                            <x-input-error :messages="$errors->get('city')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">E-Mail</label>
                            <x-input-text type="text" name="email" placeholder="E-Mail" :value="old('email', $company->email)" />
                            <x-input-error :messages="$errors->get('email')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Website</label>
                            <x-input-text type="text" name="website" placeholder="Website" :value="old('website', $company->website)" />
                            <x-input-error :messages="$errors->get('website')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Telefon</label>
                            <x-input-text type="text" name="phone" placeholder="Telefon" :value="old('phone', $company->phone)" />
                            <x-input-error :messages="$errors->get('phone')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Handy</label>
                            <x-input-text type="text" name="mobile" placeholder="Handy" :value="old('mobile', $company->mobile)" />
                            <x-input-error :messages="$errors->get('mobile')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">WhatsApp</label>
                            <x-input-text type="text" name="whatsapp" placeholder="WhatsApp" :value="old('whatsapp', $company->whatsapp)" />
                            <x-input-error :messages="$errors->get('whatsapp')" class="mt-3" />
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Firmenlogo</label>
                            <x-input-text id="imageInput" type="file" name="logo_path" />
                            <x-input-error :messages="$errors->get('logo_path')" class="mt-3" />

                        </div>

                        <div class="col-6 d-flex flex-wrap mb-3">
                            <div class="image-preview me-3" id="imagePreview">
                                Logo Preview
                            </div>
                            @if ($company->logo_path)
                            <div class="">
                                <img class="image-preview" src="{{ asset('storage/' . $company->logo_path) }}" alt="Logo">
    
                            </div>
                            @endif
                       
                        </div>

                        <div class="col-lg-6 col-12 mb-3">
                            <label class="form-label mx-3">Firmenicon</label>
                            <x-input-text id="iconInput" type="file" name="icon" />
                            <x-input-error :messages="$errors->get('icon')" class="mt-3" />

                        </div>

                        <div class="col-6 d-flex flex-wrap">
                            <div class="border me-3" id="iconPreview" style="width: 64px; height: 64px;">
                                Icon Preview
                            </div>
                            @if ($company->icon)
                            <div class="">
                                <img class="" src="{{ asset('storage/' . $company->icon) }}" alt="Icon" style="width: 64px; height: 64px;">
    
                            </div>
                            @endif
                           
                        </div>

          


                        <div class="mt-4">
                            <input type="submit" class="btn btn-primary" value="Speichern">
                        </div>

                    </form>





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
                    img.classList.add('image-preview');
                    imagePreview.appendChild(img);
                }

                reader.readAsDataURL(file);
            }

            imagePreview.classList.remove('image-preview')

        });
    </script>

<script>
    const iconInput = document.getElementById('iconInput');
    const iconPreview = document.getElementById('iconPreview');

    iconInput.addEventListener('change', function(event) {

        console.log(event)
        const files = event.target.files; // Mehrere Bilder
        iconPreview.innerHTML = ''; // Clear existing content

        for (const file of files) {
            const reader = new FileReader();

            reader.onload = function(e) {
                const img = document.createElement('img');
                img.src = e.target.result;
                img.style.width = '64px';
                img.style.height = '64px';
                // img.classList.add('image-preview', 'me-2');
                iconPreview.appendChild(img);
            }

            reader.readAsDataURL(file);
        }

        // iconPreview.classList.remove('image-preview')

    });
</script>

</x-admin-layout>
