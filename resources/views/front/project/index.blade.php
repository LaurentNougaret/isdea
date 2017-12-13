@extends('layouts.template')
@extends('layouts.breadcrumb')
@extends('layouts.navbar')
@section('content')
    <div class="text-center my-4">
        <h2>@lang('project.projects')</h2>
    </div>
    @if(Auth::user() && Auth::user()->role->name == "Administrator" || Auth::user()->role->name == "Supervisor")
        <div class="row">
            <div class="col-9 col-sm-8 col-md-6 col-lg-5">
                <form action="{{action('Back\ProjectController@index')}}" method="GET" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name ="search" id="inlineFormInputGroup" placeholder="Search..."/>
                        <div class="input-group-btn">
                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search fa-fw" aria-hidden="true"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    @endif
    <div class="projects-table">
        <table class="table table-hover table-striped">
            <thead>
            <tr>
                <th class="align-middle" scope="col">@lang('project.number')</th>
                <th class="align-middle" scope="col">@lang('project.project')</th>
                <th class="align-middle" scope="col">@lang('project.unit')</th>
                <th class="align-middle" scope="col">@lang('project.area')</th>
                <th class="align-middle" scope="col">@lang('project.progress')</th>
            </tr>
            </thead>
            <tbody>
            @foreach($projects as $project)
                <tr>
                    <td>{{ $project->id }}</td>
                    <td><a class="link-color" href="{{ route('result.edit', $project->result_id) }}">{{ $project->result_id }}</a></td>
                    <td>{{ $project->unit }}</td>
                    <td>{{ $project->area }}</td>
                    <td>
                        @if(($project->progress*100) <= '25%')
                            <div class="progress">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $project->progress*100 }}%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">{{ $project->progress*100 }}%</div>
                            </div>
                        @elseif(($project->progress*100) <= '50%')
                            <div class="progress">
                                <div class="progress-bar bg-orange" role="progressbar" style="width: {{ $project->progress*100 }}%" aria-valuenow="50" aria-valuemin="26" aria-valuemax="100">{{ $project->progress*100 }}%</div>
                            </div>
                        @elseif(($project->progress*100) <= '75%')
                            <div class="progress">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: {{ $project->progress*100 }}%" aria-valuenow="75" aria-valuemin="51" aria-valuemax="100">{{ $project->progress*100 }}%</div>
                            </div>
                        @else(($project->progress*100) > '75%')
                            <div class="progress">
                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $project->progress*100 }}%" aria-valuenow="100" aria-valuemin="76" aria-valuemax="100">{{ $project->progress*100 }}%</div>
                            </div>
                        @endif
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    {{ $projects->links('layouts.pagination') }}
@endsection