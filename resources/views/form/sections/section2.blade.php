<section id="content2" class="tab-content">
    <a id="section2" name="section2" href="#section2"></a>
    <h3  class="h3_form">@lang('form.completeness.case')</h3>
    <div id="section2" class="row justify-content-left">
        <div class="form-group col-md-8">
            <label for="" class="col-form-label">@lang('form.missing_element.commentary')</label>
            <textarea id=""  placeholder="" class="form-control middle_textarea max200" name="project_content[7]">{{ $result->content[7] }}</textarea>
            <p class="mr-auto mt-2 compteur200">0 / 200 max</p>
        </div>
    </div>
</section>