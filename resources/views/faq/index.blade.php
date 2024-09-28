<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Häufig gestellte Fragen</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            Häufige Fragen
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
                            <a href="{{ route('faq.create') }}" class="btn btn-primary">Hinzufügen</a>
                        </div>

                        <div class="card-body p-0">
                            @foreach ($faqs as $faq)
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title">
                                        <a href="{{ route('faq.show', $faq->id) }}">#{{$faq->id}} - {{$faq->question}}</a>
                                    </h5>
                                </div>
                                <div class="card-body">
                                   {{ $faq->answer }}
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
