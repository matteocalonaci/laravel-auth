@extends('layouts.layout')

@section('content')

<h2>EDIT</h2>
    <form method="POST" action="{{ route('admin.type.update', $type->id) }}" class="p-5">
        @method('PUT')
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" value="{{$type->'name'}}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <input type="text" class="form-control" name="description" id="description" value="{{$type->'description'}}">
        </div>
        <div class="mb-3">
            <label for="icon" class="form-label">Cration date</label>
            <input type="text" class="form-control" name="icon" id="icon" value="{{$type->'icon'}}">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
@endsection
