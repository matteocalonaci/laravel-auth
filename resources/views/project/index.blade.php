@extends('layouts.layout')

@section('content')
<h1>Project</h1>

<div class="card_container">
@foreach ($catalogo as $progetti)
<div class="card">
    <h3 class="mt-4"> <a href="{{route("admin.project.show", $progetti)}}">Nome Type {{ $progetti->name}}</a></h3>
<p>Description: {{$progetti->description}}</p>
<p>creation date: {{$progetti->creation_date}}</p>
<p>Type: {{ $progetti['type_id']}}</p>



<div class="card-footer text-center">
        <a href="{{ route('admin.project.show', $progetti->id) }}" class="btn btn-primary p-">Vai ai dettagli</a>
        <a href="{{ route('admin.project.edit', $progetti->id) }}" class="btn btn-warning p-1">Modifica</a>
        <form action="{{ route('admin.project.destroy', $progetti->id) }}" method="POST
            " class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger p-1">Elimina</button>
            </form>
    </div>

</div>
@endforeach
</div>
@endsection
