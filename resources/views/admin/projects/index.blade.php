@extends('layouts.admin')

@section('content')
    <ul class="list-group py-5">
        @foreach ($projects as $project)
            <a style="text-decoration: none" href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                <li class="list-group-item d-flex gap-3">
                    <div class="col-1">{{ $project->id }}</div>
                    <div class="col-4">{{ $project->name }}</div>
                    <div class="col-6">{{ $project->content }}</div>
                </li>
            </a>
        @endforeach

    </ul>
@endsection
