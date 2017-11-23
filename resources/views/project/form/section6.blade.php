<section id="content6" class="tab-content">
  {{--@if(count($errors)>0)--}}
        {{--<div class="alert alert-danger">--}}

            {{--<strong>Whoops!</strong> There were some problems with your input.<br><br>--}}

            {{--<ul>--}}

                {{--@foreach ($errors->all() as $error)--}}

                    {{--<li>{{ $error }}</li>--}}

                {{--@endforeach--}}

            {{--</ul>--}}

        {{--</div>--}}
    {{--@endif--}}

    {{--<form action="{{route('fileUpload')}}" enctype="multipart/form-data"></form>--}}
      {{--<div class="row cancel">--}}

          {{--<div class="col-md-4">--}}



          {{--</div>--}}

          {{--<div class="col-md-4">--}}

              {{--<button type="submit" class="btn btn-success">Create</button>--}}

          {{--</div>--}}

      {{--</div>--}}
      {{--</form>--}}
    <form method="POST">

    <input name="picture"  type="file">
        <button type="submit" class="btn btn-outline-danger shadow-button mr-2">@lang('form.register')</button>

    </form>


</section>


      {{--<div class="container"> <br />--}}
        {{--<div class="row">--}}
            {{--<div class="col-md-12">--}}
                {{--<div class="panel panel-default">--}}
                    {{--<div class="panel-heading"><strong>Upload files</strong> <small> </small></div>--}}
                    {{--<div class="panel-body">--}}
                        {{--<div class="input-group image-preview">--}}
                            {{--<input placeholder="" type="text" class="form-control image-preview-filename" disabled="disabled">--}}
                            {{--<!-- don't give a name === doesn't send on POST/GET -->--}}
                            {{--<span class="input-group-btn">--}}
						{{--<!-- image-preview-clear button -->--}}
						{{--<button type="button" class="btn btn-default image-preview-clear" style="display:none;"> <span class="glyphicon glyphicon-remove"></span> Clear </button>--}}
                                {{--<!-- image-preview-input -->--}}
						{{--<div class="btn btn-default image-preview-input"> <span class="glyphicon glyphicon-folder-open"></span> <span class="image-preview-input-title">Browse</span>--}}
							{{--<input type="file" accept="image/png, image/jpeg, image/gif" name="input-file-preview"/>--}}
                            {{--<!-- rename it -->--}}
						{{--</div>--}}
						{{--<button type="button" class="btn btn-labeled btn-primary"> <span class="btn-label"><i class="glyphicon glyphicon-upload"></i> </span>Upload</button>--}}
						{{--</span> </div>--}}
                        {{--<!-- /input-group image-preview [TO HERE]-->--}}

                        {{--<br />--}}

                        {{--<!-- Drop Zone -->--}}
                        {{--<div class="upload-drop-zone" id="drop-zone"> Or drag and drop files here </div>--}}
                        {{--<br />--}}
                        {{--<!-- Progress Bar -->--}}
                        {{--<div class="progress">--}}
                            {{--<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;"> <span class="sr-only">60% Complete</span> </div>--}}
                        {{--</div>--}}
                        {{--<br />--}}

                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}



        {{--</div>--}}
    {{--</div>--}}


{{--</section>--}}