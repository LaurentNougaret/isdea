<section id="content6" class="tab-content">

    <div class="row justify-content-center col-md-12">
        <div class="col-md-4">
            <div class="form-group col-md-12">
                <div class="fdw-background">
                    <div class="row mx-1">
                    <input type="file" class="form-control input_style" id="file" name="project_content[27]" value="{{ $result->content[27] }}" aria-selected="{{ $result->content[27] }}">
                    </div>
                        <div class="delete_file row mx-4">
                            <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[0]" value="{{ $result->content[27] }}">
                        <label>Check it to delete your picture</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal">
                    <img src="{{ ("/storage/" . $result->content[27]) }}" alt="image" width="50%" class="mypicture"/>
                </button>
            </div>
        </div>

        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier uploadé</h4>
                    </div>
                    <div class="modal-body">
                        <img src="{{ ("/storage/" . $result->content[27]) }}" width="200%"/>
                    </div>
                </div>
            </div>
        </div>

        <div class="row justify-content-center col-md-4">
            <div class="col-md-12">
                    <div style="opacity: 0;" class="fdw-background">
                        <div class="fileUpload btn btn-primary">
                            <span>Upload</span>
                            <input type="file" class="form-control upload" id="file" name="project_content[31]" value="{{ $result->content[31] }}" aria-selected="{{ $result->content[27] }}">
                        </div>
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[1]" value="{{ $result->content[31] }}">
                    </div>
                    <button type="button" data-toggle="modal" data-target="#myModal">
                        <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="50%" class="mypicture"/>
                    </button>
                    <label class="form-check-label">

                    </label>
                </div>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier uploadé</h4>
                        </div>
                        <div class="modal-body">
                            <img src="{{ ("/storage/" . $result->content[31]) }}" width="200%"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>






    {{--<div class="col-md-4">--}}
    {{--<div class="row justify-content-center">--}}
    {{--<div class="form-group col-md-12">--}}
    {{--<input type="file" class="form-control" id="file" name="project_content[31]" value="{{ $result->content[31] }}">--}}
    {{--<img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="500">--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<label class="form-check-label">--}}
    {{--<input class="form-check-input js-checkbox-selected" type="checkbox" name="select_picture[1]" value="{{ $result->content[31] }}">--}}
    {{--</label>--}}
    {{--<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">--}}
    {{--<div class="modal-dialog" role="document">--}}
    {{--<div class="modal-content">--}}
    {{--<div class="modal-header">--}}
    {{--<button type="button" class="close" data-dismiss="modal" aria-label="Close">--}}
    {{--<span aria-hidden="true">&times;</span>--}}
    {{--</button>--}}
    {{--<h4 class="modal-title" id="myModalLabel">Fichier uploadé</h4>--}}
    {{--</div>--}}
    {{--<div class="modal-body">--}}
    {{--<img src="{{ ("/storage/" . $result->content[31]) }}" width="200%"/>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
</section>


