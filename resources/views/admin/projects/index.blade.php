@extends('layouts.admin')

@section('content')
    <ul class="list-group py-5">
        @foreach ($projects as $project)
            <a style="text-decoration: none" href="{{ route('admin.projects.show', ['project' => $project->id]) }}">
                <li class="list-group-item d-flex justify-content-between gap-3 text-center">
                    <div class="col-1">{{ $project->id }}</div>
                    <div class="col-3">{{ $project->name }}</div>
                    <div class="col-4">{{ $project->content }}</div>
                    @if (str_contains($project->cover_image, 'http'))
                        <img class="col-2" src="{{ $project->cover_image }}">
                    @else
                        <img class="col-2" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
                    @endif
                </li>
            </a>
        @endforeach

    </ul>
@endsection
