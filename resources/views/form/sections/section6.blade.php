<section id="content6" class="tab-content">
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="project_content[27]" value="{{ $result->content[27] }}">
            <img src="{{ ("/storage/" . $result->content[27]) }}" alt="image" height="200">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="project_content[31]" value="{{ $result->content[31] }}">
            <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" height="200">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>
</section>


