@extends('layout')

@section('content')
<div class="container">
	<h1>{{ $seance->sequence->libelle }}{{ $seance->sequence->annee }}</h1>
	<div class="panel panel-{{ $seance->panel() }}">
		<div class="panel-heading">
			<h3 class="panel-title">
				{{ $seance->writeDate($seance->date) }} 
				({{ ltrim(date_create($seance->duree)->format('h'), '0') }}h)
				@if($seance->salle != '')
				,
				<?php $seancealles = explode(' ', $seance->salle); ?>
				Salle {{ $seancealles[0] }} {{ isset($seancealles[1]) ? ' puis '.$seancealles[1] : '' }}
				@endif
			</h3>
		</div>
	    <div class="panel-body">
			<h4>{{ $seance->libelle }}</h4>
			<div>{!! $seance->contenu !!}</div>
		</div>
	</div>
	<a href="/seances/{{ $seance->id }}/edit" class="btn btn-warning">Editer</a>
	<a href="/sequences/{{ $seance->sequence->id }}" class="btn btn-primary">Retour</a>
</div>
@endsection