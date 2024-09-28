<x-admin-layout>

    <div class="app-content-header"> <!--begin::Container-->
        <div class="container-fluid"> <!--begin::Row-->
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="mb-0">Leistung bearbeiten</h3>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item">
                            <a href="{{route('faq.index')}}">Häufige Fragen</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="{{route('faq.show', $faq->id)}}">Häufige Frage</a>
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
                    <form id="form" action="{{ route('faq.update', $faq->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('patch')
    
                        <div class="col-lg-6 mb-3">
                            <x-input-text type="text" name="question" placeholder="Frage" :value="old('question', $faq->question)" />
                            <x-input-error :messages="$errors->get('question')" class="mt-3" />
                        </div>
                        
                        <div class="col-lg-6 mb-3">
                            <textarea class="form-control" name="answer" rows="10" placeholder="Antwort">{{ old('answer', $faq->answer) }}</textarea>
                            <x-input-error :messages="$errors->get('answer')" class="mt-3" />
                        </div>

                        <div class="">
                            <input type="submit" class="btn btn-primary mt-3" value="Speichern">
                        </div>
    
                    </form>
                    
                </div>


            </div> <!--end::Row--> <!--begin::Row-->
        </div> <!--end::Container-->
    </div> <!--end::App Content-->

</x-admin-layout>
