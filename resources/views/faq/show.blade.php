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
                            <a href="{{route('faq.index')}}">Häufige Fragen</a>
                        </li>
                        <li class="breadcrumb-item">
                            Häufige Frage
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
                                <a href="{{ route('faq.edit', $faq->id) }}" class="btn btn-primary">Bearbeiten</a>
                            </div>
                            <form action="{{route('faq.delete', $faq->id)}}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Entfernen" class="btn btn-danger">
                            </form>
                        </div>

                        <div class="card-body p-0">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">#{{$faq->id}} - {{$faq->question}}</h5>
                                </div>
                                <div class="card-body">
                                    {{ $faq->answer }}
                                </div>
                            </div>
                      
                        </div>

                    </div>

                </div>
              
            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>