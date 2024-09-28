<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistung</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('service.index')}}">Leistungen</a>
                        </li>
                        <li class="breadcrumb-item">
                            Leistung
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
                        <div class="card-header d-flex">
                            <div class="me-3">
                                <a href="{{ route('service.edit', $service->id) }}" class="btn btn-primary">Bearbeiten</a>
                            </div>
                            <form action="{{route('service.delete', $service->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Entfernen" class="btn btn-danger">
                            </form>
                        </div>

                        <div class="card-body p-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">#{{$service->id}} - {{$service->title}}</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row g-2">
    
                                        @foreach ($service->serviceImages as $image)
                                        <div class="col-md-6 col-lg-4 col-xl-3 col-xxl-2">
                                            <form action="{{route('serviceImage.delete', $image)}}" method="POST" style="position: absolute">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete it?')"><i class="bi bi-trash3"></i></button>
                                            </form>
                                            
                                                <img src="{{ asset('storage/' . $image->path) }}" alt="shirt" style="width: 100%; height: 250px; object-fit: cover;">
                                            
                                        </div>
                                    
                                        @endforeach
    
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