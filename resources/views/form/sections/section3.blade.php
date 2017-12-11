<section id="content3" class="tab-content">
        <h3>@lang('form.analysis.cps')</h3>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.recall.stage2')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea max1000" name="project_content[8]">{{ $result->content[8] }}</textarea>
                <p class="mr-auto mt-2 compteur1000">0 / 1000 max</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.vigilance.point')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea max1000" name="project_content[9]">{{ $result->content[9] }}</textarea>
                <p class="mr-auto mt-2 compteur1000">0 / 1000 max</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.plu.urban')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea max1400" name="project_content[10]">{{ $result->content[10] }}</textarea>
                <p class="mr-auto mt-2 compteur1400">0 / 1400 max</p>
            </div>
        </div>
</section>