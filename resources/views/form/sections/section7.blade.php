<section id="content7" class="tab-content">
    <h3>@lang('form.synthesis')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.section.summary')</label>
            <textarea id="section-summary"  placeholder="" class="form-control textarea-1000" name="project_content[31]" maxlength="1000" autofocus>{{ $result->content[31] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur31">0 / 1000 @lang('form.char_max')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.advice.summary')</label>
            <textarea id="adv-summary"  placeholder="" class="form-control textarea-300" name="project_content[32]" maxlength="300">{{ $result->content[32] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur32">0 / 300 @lang('form.char_max')</p>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.commentaries')</label>
            <textarea id="commentaries"  placeholder="" class="form-control textarea-1000" name="project_content[33]" maxlength="1000">{{ $result->content[33] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur33">0 / 1000 @lang('form.char_max')</p>
        </div>
    </div>
</section>