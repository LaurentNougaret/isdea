<section id="content6" class="tab-content">
    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="project_content[27]" value="{{ $result->content[27] }}" aria-selected="{{ $result->content[27] }}">
            <button type="button" data-toggle="modal" data-target="#myModal">
                <img src="{{ ("/storage/" . $result->content[27]) }}" alt="image" height="200"/>
            </button>
            <label class="form-check-label">
                <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[0]" value="{{ $result->content[27] }}">
            </label>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h4 class="modal-title" id="myModalLabel">Fichier uploadé</h4>
                </div>
                <div class="modal-body">
                    <img src="{{ ("/storage/" . $result->content[27]) }}" width="100%"/>
                </div>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="form-group col-md-12">
            <label for="file" class="col-form-label">@lang('form.graphic.items')</label>
            <input type="file" class="form-control" id="file" name="project_content[31]" value="{{ $result->content[31] }}">
            <p>{{ $result->content[31] }}</p>
            <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" height="200">
        </div>
    </div>
    <label class="form-check-label">
        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[1]" value="{{ $result->content[31] }}">
    </label>
</section>


