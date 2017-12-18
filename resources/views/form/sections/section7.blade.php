<section id="content7" class="tab-content">
    <h3>@lang('form.synthesis')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.section.summary')</label>
            <textarea id="section-summary"  placeholder="" class="form-control textarea-1000" name="project_content[38]" maxlength="1000" autofocus>{{ $result->content[38] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur28">0 / 1000 @lang('form.char_max')</p>
        </div>
    </div>
    @if(Auth::user() && Auth::user()->role->name == "Administrator" || Auth::user()->role->name == "Supervisor")
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.advice.summary')</label>
            <textarea id="adv-summary"  placeholder="" class="form-control textarea-300" name="project_content[39]" maxlength="300">{{ $result->content[39] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur29">0 / 300 @lang('form.char_max')</p>
        </div>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.commentaries')</label>
            <textarea id="commentaries"  placeholder="" class="form-control textarea-1000" name="project_content[40]" maxlength="1000">{{ $result->content[40] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur30">0 / 1000 @lang('form.char_max')</p>
        </div>
    </div>
</section>