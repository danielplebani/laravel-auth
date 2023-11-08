@extends('layouts.admin')

@section('content')
    <div class="container py-5">

        <form action="{{ route('admin.projects.update', $project) }}" method="POST" enctype="multipart/form-data">

            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="name" class="form-label">name</label>
                <input type="text" class="form-control" name="name" id="name" aria-describedby="helpId"
                    placeholder="Acolyte Eco Battle staff" value="{{ old('name', $project->name) }}">
                <small id="nameHelper" class="form-text text-muted">
                    <i class="fa-solid fa-circle-exclamation"></i>
                    Type the name here

                    @error('name')
                        <div class="text-danger">{{ $message }}</div>
                    @enderror
                </small>
            </div>

            <div class="mb-3">
                <label for="content" class="form-label">content</label>
                <input type="text" class="form-control" name="content" id="content" aria-describedby="helpId"
                    placeholder="Acolyte is a action movies with..." value="{{ old('content', $project->content) }}">
                <small id="contentHelper" class="form-text text-muted">Type the content here</small>
            </div>

            <button type="submit" class="btn btn-primary my-4">
                Update
            </button>
        </form>

        <div style="margin: 3rem 0" class="form-text">
            <i class="fa-solid fa-circle-exclamation"></i>=required field
        </div>

    </div>
@endsection
