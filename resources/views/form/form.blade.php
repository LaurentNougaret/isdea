@extends('layouts.template')
@extends('layouts.navbar')
@section('content')
    <form method="POST" action="{{ route('result.update', $result->result_id) }}" enctype="multipart/form-data">
        {{ method_field('PATCH') }}
        {{ csrf_field() }}
        <div id="global_form">
            @if (count($errors) > 0)
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <h2>Isdea : Projet {{ $result->project_name }}</h2>
            <div class="tab_container justify-content-center">

                <input id="tab1" type="radio" name="tabs" value="0" class="forms_input" checked>
                <label for="tab1" class="forms_label"><span>@lang('form.identity')</span></label>

                <input id="tab2" type="radio" name="tabs" value="1" class="forms_input">
                <label for="tab2" class="forms_label"><span>@lang('form.completeness')</span></label>

                <input id="tab3" type="radio" name="tabs" value="2" class="forms_input">
                <label for="tab3" class="forms_label"><span>@lang('form.analysis')</span></label>

                <input id="tab4" type="radio" name="tabs" value="3" class="forms_input">
                <label for="tab4" class="forms_label"><span>@lang('form.analysis.criterias')</span></label>

                <input id="tab5" type="radio" name="tabs" value="4" class="forms_input">
                <label for="tab5" class="forms_label"><span>@lang('form.analysis.areas')</span></label>

                <input id="tab6" type="radio" name="tabs" value="5" class="forms_input">
                <label for="tab6" class="forms_label"><span>@lang('form.graphic.items')</span></label>

                <input id="tab7" type="radio" name="tabs" value="6" class="forms_input">
                <label for="tab7" class="forms_label"><span>@lang('form.synthesis')</span></label>


                <a href="{{action('Back\AdminController@generatePDF', $result->result_id)}}" target="_blank">Générer la fiche PDF</a>

                @include('form.sections.section1')
                @include('form.sections.section2')
                @include('form.sections.section3')
                @include('form.sections.section4')
                @include('form.sections.section5')
                @include('form.sections.section6')
                @include('form.sections.section7')

                <div class="form-group row justify-content-between">
                    <button id="btnreturn" type="button" class="btn btn-outline-secondary shadow-button ml-3">@lang('form.back')</button>
                    <div>
                        <button type="submit" class="btn btn-outline-danger shadow-button mr-2">@lang('form.register')</button>
                        <button id="btnnext" type="button" class="btn btn-outline-success shadow-button mr-3" href="#tab1">@lang('form.next')</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection