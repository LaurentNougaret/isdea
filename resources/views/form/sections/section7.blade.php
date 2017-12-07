<section id="content7" class="tab-content">
    <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.sections')</label>
                <p>@lang('form.section.summary')</p>
                <textarea id=""  placeholder="" class="form-control very_high_textarea max1000" name="project_content[28]">{{ $result->content[28] }}</textarea>
                <p class="mr-auto mt-2 compteur1000">0 / 1000 max</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.advice.summary')</label>
                <textarea id=""  placeholder="" class="form-control small_textarea max300" name="project_content[29]">{{ $result->content[29] }}</textarea>
                <p class="mr-auto mt-2 compteur300">0 / 300 max</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.commentaries')</label>
                <textarea id=""  placeholder="" class="form-control middle_textarea max1000" name="project_content[30]">{{ $result->content[30] }}</textarea>
                <p class="mr-auto mt-2 compteur1000">0 / 1000 max</p>
            </div>
        </div>
</section>