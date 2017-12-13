<section id="content3" class="tab-content">
        <h3>@lang('form.analysis.cps')</h3>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.recall.stage2')</label>
                <textarea id="recall"  placeholder="" class="form-control textarea-1000" name="project_content[8]" maxlength="1000" autofocus>{{ $result->content[8] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur8">0 / 1000 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.vigilance.point')</label>
                <textarea id="vigilance"  placeholder="" class="form-control textarea-1000" name="project_content[9]" maxlength="1000">{{ $result->content[9] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur9">0 / 1000 @lang('form.char_max')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.plu.urban')</label>
                <textarea id="plu"  placeholder="" class="form-control textarea-1400" name="project_content[10]" maxlength="1400">{{ $result->content[10] }}</textarea>
                <p class="line-under-textarea mt-1" id="compteur10">0 / 1400 @lang('form.char_max')</p>
            </div>
        </div>
</section>