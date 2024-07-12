@extends('layouts.layout')

@section('content')
	<h2>Single Type</h2>

<div class="card_container">
    <div class="card">
	<ul>
		<li class="mt-4">Nome progetto: {{ $type['name'] }}</li>
		<li>Descrizione: {{ $type['description'] }}</li>
		<li>Icona: {{ $type['icon'] }}</li>
	</ul>
    </div>
</div>

@endsection
