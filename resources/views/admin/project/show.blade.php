@extends('layouts.layout')

@section('content')
	<h2>Single Project</h2>

    <div class="card_container">
        <div class="card">
            <h4 class="mt-4 mb-4">{{ $project['name'] }}</h4>
            <div class="img_container">
                <img src="{{$project['thumb']}}" alt="">
            </div>
        <p class="mt-4">Description: {{$project->description}}</p>
        <p>creation date: {{$project->creation_date}}</p>
        <p>Type: {{ $project['type_id']}}</p>
        <p class="mt-4 mb-4"> <a href="{{route("admin.type.show", $project->type)}}">{{ $project->type->name}}</a></p>




        <div class="card-footer text-center">
                <a href="{{ route('admin.project.show', $project->id) }}" class="btn btn-primary p-">Vai ai dettagli</a>
                <a href="{{ route('admin.project.edit', $project->id) }}" class="btn btn-warning p-1">Modifica</a>
                <form action="{{ route('admin.project.destroy', $project->id) }}" method="POST
                    " class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger p-1">Elimina</button>
                    </form>
            </div>

@endsection
