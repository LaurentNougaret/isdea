<section id="content2" class="tab-content">
    <form method="POST" action="">
        {{ csrf_field() }}
        <a id="section2" name="section2" href="#section2"></a>
        <h3  class="h3_form">@lang('form.completeness.case')</h3>
        <div id="section2" class="row justify-content-left">
            <div class="form-group col-md-8">
                <label for="" class="col-form-label">@lang('form.missing_element.commentary')</label>
                <textarea id=""  placeholder="" class="form-control middle_textarea" name=""></textarea>
                <p>@lang('form.200.sign')</p>
            </div>
        </div>
        <div class="row justify-content-between">
            <button id="btnreturn" type="button" class="btn btn-outline-secondary shadow-button  ml-3">@lang('form.return')</button>
            <div>
                <button type="button" class="btn btn-outline-danger  shadow-button mr-2">@lang('form.register')</button>
                <button  id="btnnext" type="button"  class="btn btn-outline-success shadow-button radionext mr-3" href="">@lang('form.next')</button>
            </div>
        </div>
    </form>
</section>