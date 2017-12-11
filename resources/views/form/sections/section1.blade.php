<section id="content1" class="tab-content">

    <a href="{{action('Back\AdminController@generatePDF', $result->result_id)}}" target="_blank">Générer la fiche PDF</a>
    <h3>@lang('form.project.identity')</h3>
    <div class="row justify-content-between">
        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.n_project')</label>
            <input id="result_id" type="hidden" placeholder="" class="form-control" name="result_id" value="{{ $result->result_id }}">
            <input id="" type="text" placeholder="" class="form-control" name="project_content[]" value="{{ $result->content[0] }}">
            <p>@lang('form.number.chosen')</p>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.project.title')</label>
            <input id="" type="text" placeholder="" class="form-control max100" name="project_content[]" value="{{ $result->content[1] }}">
            <p class="mr-auto mt-2 compteur100">0 / 100 max</p>
        </div>
    </div>
    <hr>
    <h3>@lang('form.sections')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.mandatory')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea max100" name="project_content[]" value="{{ $result->content[2] }}">
            <p class="mr-auto mt-2 compteur100">0 / 100 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.designer')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea max300" name="project_content[]" value="{{ $result->content[3] }}">
            <p class="mr-auto mt-2 compteur300">0 / 300 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.investor.sponsor')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea max300" name="project_content[]" value="{{ $result->content[4] }}">
            <p class="mr-auto mt-2 compteur300">0 / 300 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.manager')</label>
            <textarea id=""  placeholder="" class="form-control high_textarea max500" name="project_content[]">{{ $result->content[5] }}</textarea>
            <p class="mr-auto mt-2 compteur500">0 / 500 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.other')</label>
            <textarea id=""  placeholder="" class="form-control high_textarea max500" name="project_content[]">{{ $result->content[6] }}</textarea>
            <p class="mr-auto mt-2 compteur500">0 / 500 max</p>
        </div>
    </div>
</section>