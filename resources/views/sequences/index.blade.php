@extends('layout')

@section('title', 'Séquences')

@section('header')
	<h1>bWork - Séquences</h1>
	<p>Bastien Thouverez</p>
@endsection

@section('content')
	<p>
		<a href="/sequences/create"><button class="btn btn-primary">Créer séquence</button></a>
	</p>
	@foreach($sequences as $s)
		<div class="panel panel-success">
			<div class="panel-heading">
        <a href="/sequences/{{ $s->id }}">
				<h3 class="panel-title">
          			{{ $s->libelle }} {{ $s->annee }}
				</h3>
        </a>
			</div>
	        <div class="panel-body">
				<h4>{{ $s->lieu }}</h4>
				<div>{{ $s->groupe }}</div>
			</div>
		</div>
	@endforeach
@endsection