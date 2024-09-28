<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Firma</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            Firma
                        </li>
                    </ol>
                </div>
            </div> <!--end::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content Header--> <!--begin::App Content-->
    <div class="app-content"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row"> <!--begin::Col-->
                <div class="col-6">
                    <div class="card">
                        <div class="card-header d-flex">
                            <div class="me-3">
                                <a href="{{ route('company.edit', $company->id) }}" class="btn btn-primary">Bearbeiten</a>
                            </div>
                        </div>
    
                        <div class="card">
                            <div class="card-body p-0">
                               
                                    <div class="row mt-1 mx-1 fs-5">
                                        <div class="col">Name</div>
                                        <div class="col"> {{ $company->name }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Boss Vorname</div>
                                        <div class="col"> {{ $company->director_name }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Boss Nachname</div>
                                        <div class="col"> {{ $company->director_lastname }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Straße</div>
                                        <div class="col"> {{ $company->street }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">PLZ</div>
                                        <div class="col"> {{ $company->zip }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Ort</div>
                                        <div class="col"> {{ $company->city }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">E-Mail</div>
                                        <div class="col"> {{ $company->email }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Website</div>
                                        <div class="col"> {{ $company->website }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Telefon</div>
                                        <div class="col"> {{ $company->phone }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">Handy</div>
                                        <div class="col"> {{ $company->mobile }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 border-top fs-5">
                                        <div class="col">WhatsApp</div>
                                        <div class="col"> {{ $company->whatsapp }} </div>
                                    </div>
    
                                    <div class="row mt-1 mx-1 pt-1 border-top fs-5">
                                        <div class="col">Logo</div>
                                        <div class="col">
                                            <img class="bg-secondary" src="{{ asset('storage/' . $company->logo_path) }}" alt="Logo" style="width: 100%; height: 100px;object-fit: cover;">
                                        </div>
                                    </div>
    
                                    <div class="row m-1 pt-1 border-top fs-5">
                                        <div class="col">Icon</div>
                                        <div class="col">
                                            <img class="border bg-secondary" src="{{ asset('storage/' . $company->icon) }}" alt="Icon" style="width: 64px; height: 64px;">
                                        </div>
                                    </div>
    
    
    
                            </div>
    
                        </div>
                    </div>
            

                </div>

            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>
