@extends('layouts.layout')

@section('content')
	<h2>Single technology</h2>

<div class="card_container">
    <div class="card">
	<ul>
		<li class="mt-4">Nome progetto: {{ $technology['name'] }}</li>
		<li>Descrizione: {{ $technology['description'] }}</li>
		<li>Icona: {{ $technology['icon'] }}</li>
	</ul>
    </div>
</div>

@endsection

