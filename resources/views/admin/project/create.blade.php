@extends('layouts.layout')

@section('content')
    <form method="POST" action="{{ route('admin.project.store') }}" class="p-5" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Name</label>
            <input type="text" class="form-control" name="name">
            @error('name')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label p-2">Immagine:</label>
            <input type="file" class="form-control w-100" name="thumb" id="thumb">
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
            <label class="form-label">Creation Date</label>
            <input type="text" class="form-control" name="creation_date">
            @error('creation_date')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <select class="form-select dorm-select-lg" name="type_id" id="">
            @foreach($catalogo as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
         </div>
         <div class="mb-3">
         <label for="technologies" class="form-label">Technologies</label>
         <div class="container_tech" style="display: flex; justify-content:space-between; align-items:center; width:50rem">
         @foreach($catalog as $technology)
         <input type="checkbox">
             <option value="{{ $technology->id }}">{{ $technology->name }}</option>
             @endforeach
         </div>
            {{-- <select class="form-select dorm-select-lg" name="technologies[]" id="technologies" multiple> --}}
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
