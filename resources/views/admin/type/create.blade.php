@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('admin.project.store') }}" class="p-5">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="m-3">
            <label for="thumb" class="form-label p-2">Immagine:</label>
            <input type="text" class="form-control w-100" name="thumb" id="thumb">
            @error('thumb')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <input type="text" class="form-control" name="description">
            @error('description')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Cration date</label>
            <input type="text" class="form-control" name="creation_date">
            @error('creation_date')
            <div>{{$message}}</div>
            @enderror

        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
