<section id="content7" class="tab-content">
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.sections')</label>
            <p>@lang('form.section.summary')</p>
            <textarea id="section-summary"  placeholder="" class="form-control very_high_textarea" name="project_content[31]" maxlength="1000">{{ $result->content[31] }}</textarea>
            <p class="mr-auto mt-2" id="compteur28">0 / 1000 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.advice.summary')</label>
            <textarea id="adv-summary"  placeholder="" class="form-control small_textarea" name="project_content[32]" maxlength="300">{{ $result->content[32] }}</textarea>
            <p class="mr-auto mt-2" id="compteur29">0 / 300 max</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.commentaries')</label>
            <textarea id="commentaries"  placeholder="" class="form-control middle_textarea" name="project_content[33]" maxlength="1000">{{ $result->content[33] }}</textarea>
            <p class="mr-auto mt-2" id="compteur30">0 / 1000 max</p>
        </div>
    </div>
</section>