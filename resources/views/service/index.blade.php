<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistungen</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
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

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <a href="{{ route('service.create') }}" class="btn btn-primary">Hinzufügen</a>
                        </div>

                        <div class="card-body p-0">
                            @foreach ($services as $service)
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        <a href="{{ route('service.show', $service->id) }}">#{{$service->id}} - {{$service->title}}</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-2">
    
                                        @foreach ($service->serviceImages as $image)
                                        <div class="col-sm-6 col-lg-4 col-xl-3 col-xxl-2">
                                            
                                            <img src="{{ asset('storage/' . $image->path) }}" alt="shirt" style="width: 100%; height: 250px; object-fit: cover;">
                                            
                                        </div>
                                    
                                        @endforeach
    
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>


            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>
