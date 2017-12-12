<section id="content1" class="tab-content">

    <a href="{{action('Back\AdminController@generatePDF', $result->result_id)}}" target="_blank">Générer la fiche PDF</a>
    <h3>@lang('form.project.identity')</h3>
    <div class="row justify-content-between">

        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.n_project')</label>
            <input id="result_id" type="hidden" placeholder="" class="form-control" name="result_id" value="{{ $result->result_id }}">
            <input id="" type="text" placeholder="" class="form-control" name="project_content[0]" value="{{ $result->content[0] }}">
            <p>@lang('form.number.chosen')</p>
        </div>


        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.project.title')</label>
            <input id="title" type="text" placeholder="" class="form-control" name="project_content[1]" value="{{ $result->project_name }}" maxlength="100">
            <p class="mr-auto mt-2" id="compteur1">0 / 100 max</p>
        </div>
    </div>
    <hr>
    <h3>@lang('form.sections')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.mandatory')</label>
            <input id="mandatory" type="text" placeholder="" class="form-control middle_textarea" name="project_content[2]" value="{{ $result->content[2] }}" maxlength="100">
            <p class="mr-auto mt-2" id="compteur2">0 / 100 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.designer')</label>
            <input id="designer" type="text" placeholder="" class="form-control middle_textarea" name="project_content[3]" value="{{ $result->content[3] }}" maxlength="300">
            <p class="mr-auto mt-2" id="compteur3">0 / 300 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.investor.sponsor')</label>
            <input id="sponsor" type="text" placeholder="" class="form-control middle_textarea" name="project_content[4]" value="{{ $result->content[4] }}" maxlength="300">
            <p class="mr-auto mt-2" id="compteur4">0 / 300 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.manager')</label>
            <textarea id="manager"  placeholder="" class="form-control high_textarea" name="project_content[5]" maxlength="500">{{ $result->content[5] }} </textarea>
            <p class="mr-auto mt-2" id="compteur5">0 / 500 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.other')</label>
            <textarea id="other"  placeholder="" class="form-control high_textarea" name="project_content[6]" maxlength="500">{{ $result->content[6] }}</textarea>
            <p class="mr-auto mt-2" id="compteur6">0 / 500 max</p>
        </div>
    </div>
</section>