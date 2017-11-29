<section id="content1" class="tab-content">
    <h3>@lang('form.project.identity')</h3>
    <div class="row justify-content-between">
        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.n_project')</label>
            <input id="result_id" type="hidden" placeholder="" class="form-control" name="result_id" value="{{ $project->result_id }}">
            <input id="project_content" type="text" placeholder="" class="form-control" name="project_content" value="{{ $project->content }}">
            <p>@lang('form.number.chosen')</p>
        </div>
        <div class="form-group col-md-4">
            <label for="" class="col-form-label">@lang('form.project.title')</label>
            <input id="" type="text" placeholder="" class="form-control" name="" value="">
            <p>@lang('form.100.sign')</p>
        </div>
    </div>
    <hr>
    <h3>@lang('form.sections')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.mandatory')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea" name="" value="">
            <p>@lang('form.100.sign')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('sections')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea" name="" value="">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.invertor.sponsor')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea" name="" value="">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.manager')</label>
            <textarea id=""  placeholder="" class="form-control high_textarea" name=""></textarea>
            <p>@lang('form.500.sign')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.other')</label>
            <textarea id=""  placeholder="" class="form-control high_textarea" name=""></textarea>
            <p>@lang('form.500.sign')</p>
        </div>
    </div>
    <div class="row justify-content-between">
        <button id="btnreturn" type="button" class="btn btn-outline-secondary shadow-button ml-3">@lang('form.back')</button>
        <div>
            <button type="submit" class="btn btn-outline-danger shadow-button mr-2">@lang('form.register')</button>
            <button id="btnnext" type="button" class="btn btn-outline-success shadow-button mr-3" href="#tab1">@lang('form.next')</button>
        </div>
    </div>
</section>