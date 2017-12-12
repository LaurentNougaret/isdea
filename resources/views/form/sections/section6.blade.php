<section id="content6" class="tab-content">
    <h3 for="file" class="col-form-label text-center">@lang('form.graphic.items')</h3>
    {{--<div class="freshdesignweb">--}}
    {{--<article class="border c-two" width="600px" style="background-image:url(/storage/{{ $result->content[27] }});">--}}

        {{--<div style="opacity: 0;" class="fdw-background">--}}

            {{--<h4><a href="https://www.freshdesignweb.com" style="color:#fff;">Save the Queen is my goal</a></h4>--}}

            {{--<div class="fdw-subtitle a-center">in <a href="#">Works</a></div>--}}

            {{--<p class="fdw-port">--}}

                {{--<a href="https://www.freshdesignweb.com">Open project <span class="vg-icon">→</span></a>--}}

            {{--</p>--}}

        {{--</div>--}}

    {{--</article>--}}
    {{--</div>--}}


    <div class="row justify-content-center col-md-12">
       <div class="col-md-4">
        <div class="form-group col-md-12">
            <input type="file" class="form-control" id="file" name="project_content[27]" value="{{ $result->content[27] }}" aria-selected="{{ $result->content[27] }}">

                <div class="border c-two robert" id=""  style="background-image:url(/storage/{{ $result->content[27] }});">
                <div style="opacity: 0;" class="fdw-background">
                    <button type="button" data-toggle="modal" data-target="#myModal">
                {{--<img src="{{ ("/storage/" . $result->content[27]) }}" alt="image" width="500" class="test"/>--}}
                    </button>
                    <label class="form-check-label">
                        <input class="form-check-input js-checkbox-selected" type="checkbox" name="select_picture[0]" value="{{ $result->content[27] }}">
                    </label>
                </div>
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
       </div>

        <div class="row justify-content-center col-md-12">
            <div class="col-md-4">
                <div class="form-group col-md-12">
                    <input type="file" class="form-control" id="file" name="project_content[31]" value="{{ $result->content[31] }}" aria-selected="{{ $result->content[31] }}">

                    <div class="border c-two robert" id=""  style="background-image:url(/storage/{{ $result->content[31] }});">
                        <div style="opacity: 0;" class="fdw-background">
                            <button type="button" data-toggle="modal" data-target="#myModal">
                                {{--<img src="{{ ("/storage/" . $result->content[27]) }}" alt="image" width="500" class="test"/>--}}
                            </button>
                            <label class="form-check-label">
                                <input class="form-check-input js-checkbox-selected" type="checkbox" name="select_picture[0]" value="{{ $result->content[31] }}">
                            </label>
                        </div>
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


