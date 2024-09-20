<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistungen</h3>
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

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                           <a href="{{ route('service.create') }}" class="btn btn-primary">Hinzufügen</a>
                        </div>

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Bezeichnung</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($services as $service)
                                    <tr>
                                        <td> {{$service->id}} </td>
                                        <td><a href="{{route('service.show', $service->id)}}">{{$service->title}}</a>
                                        
                                        </td>
                                        <td class="d-flex">
                                            @foreach ($service->serviceImages as $image)
                                            <div class="me-1" style="width: 170px; height: 200px;overflow: hidden;">
                                                
                                                <img src="{{ asset('storage/' . $image->path) }}" alt="shirt" style="width: 100%; object-fit: cover;">
                                               
                                            </div>
                                            @endforeach
                                            
                                           
                                           
                                  
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>


            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>
