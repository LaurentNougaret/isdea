<section id="content6" class="tab-content">
<h3 class="title_items">@lang('form.graphic.items')</h3>
    <!-- row1 -->
    <!-- picture1 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture_row">
            <h4 class="picture_title mx-3">@lang('form.perpective1')</h4>
            <div class="picture_block col-md-12 justify-content-center">
                    <div class="fdw-background">
                        <h6 class="modify_picture">@lang('form.modify_image')</h6>
                        <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input_style"  id="file" name="project_content[29]" value="{{ $result->content[29] }}">
                            <button type="button" onclick="$('#file').trigger('click');" class="load_file">@lang('form.upload_file')</button>
                        </div>
                            <div class="delete_file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[0]" value="{{ $result->content[29] }}">
                        <label>@lang('form.delete_file')</label>
                        </div>
                    </div>
                <button type="button" data-toggle="modal" data-target="#myModal0">
                    @if(empty($result->content[29]))
                    <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                    <img src="{{ ("/storage/" . $result->content[29]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal0" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body">
                            @if(empty($result->content[29]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[29]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        <!-- picture2 -->
        <div class=" justify-content-center picture_row">
            <h4 class="picture_title mx-3">@lang('form.perpective1')</h4>
            <div class="picture_block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify_picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input_style"  id="file" name="project_content[30]" value="{{ $result->content[30] }}" aria-selected="{{ $result->content[30] }}">
                        <button type="button" onclick="$('#file').trigger('click');" class="load_file">@lang('form.upload_file')</button>
                    </div>
                    <div class="delete_file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[1]" value="{{ $result->content[30] }}">
                        <label>@lang('form.delete_file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal1">
                    @if(empty($result->content[30]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[30]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
                <div class="modal fade col-md-12" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                                <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                            </div>
                            <div class="modal-body ">
                                @if(empty($result->content[30]))
                                    <img src="/storage/images/upload.png" alt="image" width="100%"/>
                                @else
                                    <img src="{{ ("/storage/" . $result->content[30]) }}" alt="image" width="100%"/>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    <!-- row2 -->
    <!-- picture3 -->
    <div class="row col-md-12 mx-0 justify-content-around">
        <div class=" justify-content-center picture_row">
            <h4 class="picture_title mx-3">@lang('form.perpective1')</h4>
            <div class="picture_block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify_picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input_style"  id="file" name="project_content[31]" value="{{ $result->content[31] }}" aria-selected="{{ $result->content[31] }}">
                        <button type="button" onclick="$('#file').trigger('click');" class="load_file">@lang('form.upload_file')</button>
                    </div>
                    <div class="delete_file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[2]" value="{{ $result->content[31] }}">
                        <label>@lang('form.delete_file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal2">
                    @if(empty($result->content[31]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade col-md-12" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                    </div>
                    <div class="modal-body">
                        @if(empty($result->content[31]))
                            <img src="/storage/images/upload.png" alt="image" width="100%"/>
                        @else
                            <img src="{{ ("/storage/" . $result->content[31]) }}" alt="image" width="100%"/>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- picture4 -->
        <div class=" justify-content-center picture_row">
            <h4 class="picture_title mx-3">@lang('form.perpective1')</h4>
            <div class="picture_block col-md-12 justify-content-center">
                <div class="fdw-background">
                    <h6 class="modify_picture">@lang('form.modify_image')</h6>
                    <div class="row mx-1">
                        <input style="display: none; visibility: hidden;" type="file" class="form-control input_style"  id="file" name="project_content[32]" value="{{ $result->content[32] }}" aria-selected="{{ $result->content[32] }}">
                        <button type="button" onclick="$('#file').trigger('click');" class="load_file">@lang('form.upload_file')</button>
                    </div>
                    <div class="delete_file row mx-4">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="picture[3]" value="{{ $result->content[32] }}">
                        <label>@lang('form.delete_file')</label>
                    </div>
                </div>
                <button type="button" data-toggle="modal" data-target="#myModal3">
                    @if(empty($result->content[32]))
                        <img src="/storage/images/upload.png" alt="image" width="80%"/>
                    @else
                        <img src="{{ ("/storage/" . $result->content[32]) }}" alt="image" width="50%"/>
                    @endif
                </button>
            </div>
            <!-- Modal -->
            <div class="modal fade col-md-12" id="myModal3" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <h4 class="modal-title" id="myModalLabel">Fichier upload</h4>
                        </div>
                        <div class="modal-body ">
                            @if(empty($result->content[32]))
                                <img src="/storage/images/upload.png" alt="image" width="100%"/>
                            @else
                                <img src="{{ ("/storage/" . $result->content[32]) }}" alt="image" width="100%"/>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>




</section>


