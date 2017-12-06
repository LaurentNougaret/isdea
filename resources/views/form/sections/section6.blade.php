<section id="content6" class="tab-content">

    <div class="form-group col-md-12">
    <input type="file" name="project1" width="200px" height="auto" accept="image/*" id="project">
    </div>
    <div class="form-group col-md-12">
    <input type="file" name="project2"  accept="image/*" id="project">
    </div>


    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.invertor.sponsor')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea" name="project_content[]" value="{{ $result->content[1] }}">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>

        <img src="{{ url('/storage/' . $result->content[1]) }}" alt="dcdd" name="project_content[]"/>

    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="" class="col-form-label">@lang('form.invertor.sponsor')</label>
            <input id="" type="text" placeholder="" class="form-control middle_textarea" name="project_content[]" value="{{ $result->content[2] }}">
            <p>@lang('form.300.sign')</p>
        </div>
    </div>

</section>


