<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistung</h3>
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

                        <div class="card-body table-responsive p-0">
                            <table class="table table-hover text-nowrap">
                                <tbody>
                                    <tr>
                                        <td>ID</td>
                                        <td>{{$service->id}}</td>
                                    </tr>
                                    <tr>
                                        <td> Bezeichnung </td>
                                        <td> {{$service->title}} </td>
                                    </tr>
                                    <tr>
                                        <td>Bilder</td>
                                        <td>
                                            <div class="row">
                                                
                                                    @foreach ($service->serviceImages as $image)
                                                    <div class="col relative">
                                                        <form action="{{route('serviceImage.delete', $image)}}" method="POST" style="position: absolute">
                                                            @csrf
                                                            @method('delete')
                                                            <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure, you want to delete it?')"><i class="bi bi-trash3"></i></button>
                                                        </form>
                                                        <div style="width: 250px; height: 300px; overflow: hidden;">
                                                        <img src="{{ asset('storage/' . $image->path) }}" alt="shirt" style="width: 100%; object-fit: cover;">
                                                        </div>
                                                    </div>
                                                
                                                    @endforeach
                                                
                                            </div>
                                         
                                        </td>
                                    </tr>
                                    
                                </tbody>
                            </table>
                        </div>

                    </div>

                </div>
              
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>