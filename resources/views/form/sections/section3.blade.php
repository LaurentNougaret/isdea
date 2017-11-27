<section id="content3" class="tab-content">
    <form method="POST" action="">
        {{ csrf_field() }}
        <h3>@lang('form.analysis.cps')</h3>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.recall.stage2')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea" name=""></textarea>
                <p>@lang('form.1000.sign')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.vigilance.point')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea" name=""></textarea>
                <p>@lang('form.1000.sign')</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="form-group col-md-12">
                <label for="" class="col-form-label">@lang('form.plu.urban')</label>
                <textarea id=""  placeholder="" class="form-control high_textarea" name=""></textarea>
                <p>@lang('form.1000.sign')</p>
            </div>
        </div>
        <div class="row justify-content-between">
            <button type="button" id="btnreturn" class="btn btn-outline-secondary shadow-button ml-3">@lang('form.return')</button>
            <div>
                <button type="button" class="btn btn-outline-danger shadow-button mr-2">@lang('form.register')</button>
                <button type="button" id="btnnext" class="btn btn-outline-success shadow-button" href="#content2">@lang('form.next')</button>
            </div>
        </div>
    </form>
</section>