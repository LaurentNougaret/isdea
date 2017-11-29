@extends('layouts.template')
@extends('layouts.breadcrumb')
@extends('layouts.navbar')
@section('content')
    <div class="text-center my-4">
        <h2>@lang('project.projects')</h2>
    </div>
    {{ dump ($projects) }}
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
                    <td>{{ $project->number }}</td>
                    <td><a class="link-color" href="{{ route('project.form.edit', ['project' => $project->id, 'form' => $project->form_id]) }}">{{ $project->name }}</a></td>
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