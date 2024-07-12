@extends('layouts.layout')

@section('content')
<h1>Type</h1>
<div class="card_container">
@foreach ($catalogo as $type)
<div class="card_type">

    <h3 class="mt-4"> <a href="{{route("admin.type.show", $type)}}">Nome Type {{ $type->name}}</a></h3>
    <p>Description: {{$type->description}}</p>
<p>creation date: {{$type->icon}}</p>
</div>
@endforeach
</div>
@endsection
