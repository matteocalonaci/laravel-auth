@extends('layouts.layout')

@section('content')
	<h2>Single Project</h2>

    <div class="card_container">
        <div class="card">
            <h4 class="mt-4 mb-4">{{ $project['name'] }}</h4>
            <div class="img_container">

                @if (Str::startsWith($project->thumb, "http"))

                <img src="{{$project['thumb']}}" alt="">

                @else

                <img src="{{asset('storage/' . $project->thumb)}}" alt="">

                @endif

            </div>
            <div class="text-container">
                <p class="mt-4">Description: {{ strlen($progetti->description) > 100 ? substr($progetti->description, 0, 100) . '...' : $progetti->description }}</p><p>creation date: {{$progetti->creation_date}}</p>
            <p>Type: {{ $progetti['type_id']}}</p>
            <p class="card-text">
                <span>Tecnologia Usata:</span>
                @foreach ($progetti->technologies as $technology)

                    <span class="{{ $technology->icon }}">{{ $technology->name }}</span>
                @endforeach
                </p>

            </div>






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
