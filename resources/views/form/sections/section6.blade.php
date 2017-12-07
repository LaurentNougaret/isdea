<section id="content6" class="tab-content">
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="file1" value="">

            @if(empty($result->content[7]))
                <img src="" alt="image" height="200">
            @elseif(!empty($result->content[7]))
                <img src="{{ ("/storage/" . $result->content[7]) }}" alt="image" height="200">
            @elseif(!empty($result->content[1][0]))
                <img src="{{ ("/storage/" . $result->content[1]) }}" alt="image" height="200">
            @endif

            <p>@lang('form.300.sign')</p>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="file2" value="">
            @if(empty($result->content[8]))
                <img src="" alt="image" height="200">
            @elseif(!empty($result->content[8]))
            <img src="{{ ("/storage/" . $result->content[8]) }}" alt="image" height="200">
            @elseif(!empty($result->content[1][0]))
                <img src="{{ ("/storage/" . $result->content[2][0]) }}" alt="image" height="200">
            @endif
            <p>@lang('form.300.sign')</p>
        </div>
    </div>
</section>


