@extends('layouts.admin')

@section('content')
    <div class="text-center">
        <ul class="list-group pt-5">
            <li class="list-group-item d-flex gap-3">
                <div class="col-1">{{ $project->id }}</div>
                <div class="col-3">{{ $project->name }}</div>
                <div class="col-4">{{ $project->content }}</div>
                @if (str_contains($project->cover_image, 'http'))
                    <img class="col-2" src="{{ $project->cover_image }}">
                @else
                    <img class="col-2" src="{{ asset('storage/' . $project->cover_image) }}" alt="">
                @endif
            </li>
        </ul>

        <div class="d-flex justify-content-center gap-2">
            <a href="{{ route('admin.projects.edit', ['project' => $project->id]) }}"><button type="button"
                    class="btn btn-outline-primary mt-1">edit</button></a>
            <form action="{{ route('admin.projects.destroy', ['project' => $project->id]) }}" method="POST">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-outline-danger mt-1">delete</button>
            </form>
        </div>

    </div>
@endsection
