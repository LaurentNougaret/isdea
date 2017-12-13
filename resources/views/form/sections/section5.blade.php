<section id="content5" class="tab-content">
    <h3>@lang('form.analysis.offer')</h3>
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label label-red">@lang('form.analysis.domains')</label>
            <textarea id="analysis-domains"  placeholder="" class="form-control textarea-1000" name="project_content[28]" maxlength="1000" autofocus>{{ $result->content[28] }}</textarea>
            <p class="line-under-textarea mt-1" id="compteur28">0 / 1000 @lang('form.char_max')</p>
        </div>
    </div>
</section>