@extends('layouts.layout')

@section('content')
<h1>Technology</h1>
<div class="card_container">
@foreach ($catalogo as $tech)
<div class="card_technology">

    <h3 class="mt-4"> <a href="{{route("admin.technology.show", $tech)}}">{{ $tech->name}}</a></h3>
    <p>Description: {{$tech->description}}</p>
    <p>Creation date: {{$tech->icon}}</p>
    {{-- <p class="mt-4"> <a href="{{route("admin.technology.show", $catalogo->technology)}}">{{ $catalogo->technology->name}}</a></p> --}}
    <div class="card-footer text-center">
        <a href="{{ route('admin.technology.show', $tech->id) }}" class="btn btn-primary p-">Vai ai dettagli</a>
        <a href="{{ route('admin.technology.edit', $tech->id) }}" class="btn btn-warning p-1">Modifica</a>
        <form action="{{ route('admin.technology.destroy', $tech->id) }}" method="POST
            " class="d-inline">
            @csrf
            @method('DELETE')
            <input type="submit" class="btn btn-danger p-1">Elimina</input>
            </form>
    </div>

</div>
@endforeach
</div>
@endsection

