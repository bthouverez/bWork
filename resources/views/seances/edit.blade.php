@extends('layout')

@section('header')
	<h1> Edition de séance<br>
		<small>{{ $sequence->libelle }}{{ $sequence->annee }}</small>
	</h1>
@endsection

@section('content')
	@include('errors')
	
<div class="container">
	<form method="POST" action="/sequences/{{ $sequence->id }}/seances/{{ $seance->id }}">
		@csrf
		@method('PATCH')

		<div class="form-group">
			<label for="iLibelle">Libellé</label>
			<input type="text" class="form-control" id="iLibelle" name="libelle" value="{{ $seance->libelle }}">
		</div>
		<div class="form-group">
			<label for="iDate">Date</label>
			<input type="date" class="form-control" id="iDate" name="date" value="{{ date_create($seance->date)->format('Y-m-d') }}">
		</div>
		<div class="form-group">
			<label for="iHeure">Heure</label>
			<input type="time" class="form-control" id="iHeure" name="heure" value="{{ date_create($seance->date)->format('H:i') }}">
		</div>
		<div class="form-group">
			<label for="iSalle">Salle</label>
			<input type="text" class="form-control" id="iSalle" name="salle" value="{{ $seance->salle }}">
		</div>
		<div class="form-group">
			<label for="iDuree">Duree</label>
			<input type="time" class="form-control" id="iDuree" name="duree" value="{{ date_create($seance->duree)->format('H:i') }}">
		</div>
		<div class="form-group">
			<label for="iContenu">Contenu</label>
			<textarea class="form-control" id="iContenu" name="contenu" rows="15">{{ $seance->contenu }}</textarea>
		</div>
		<button class="btn btn-primary">Sauver</button>
	</form>
	<form method="post" action="/sequences/{{ $sequence->id }}/seances/{{ $seance->id }}">
		{{ csrf_field() }}
		{{ method_field('DELETE') }}
		<button class="btn btn-danger">Détruire</button>
	</form>
	<br>

</div>
@endsection