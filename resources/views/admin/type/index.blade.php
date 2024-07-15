@extends('layouts.layout')

@section('content')
<h1>Type</h1>
<div class="card_container">
@foreach ($catalogo as $type)
<div class="card_type">

    <h3 class="mt-4 mb-4"> <a href="{{route("admin.type.show", $type)}}">{{ $type->name}}</a></h3>
    <p>Description: {{$type->description}}</p>
<p>Icon: {{$type->icon}}</p>
<p class="mt-4 mb-4"> <a href="{{route("admin.type.show", $catalogo->type)}}">{{ $catalogo->type->name}}</a></p>

</div>
@endforeach
</div>
@endsection
