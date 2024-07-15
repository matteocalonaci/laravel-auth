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
        <div class="mb-3">
            <label class="form-label">Type_id</label>
            <input type="text" class="form-control" name="type_id">
            @error('type_id')
            <div>{{$message}}</div>
            @enderror
        </div>
        <div class="mb-3">
            <select name="type_id" id="">
            @foreach($catalogo as $type)
                <option value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach
            </select>
         </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
