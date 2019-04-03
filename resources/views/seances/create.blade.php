@extends('layout')

@section('header')
	<h1> Création de séance<br>
		<small>{{ $sequence->libelle }}{{ $sequence->annee }}</small>
	</h1>
@endsection

@section('content')
	@include('errors')

<div class="container">
	<form method="POST" action="/sequences/{{ $sequence->id }}/seances">
		@csrf
		<div class="form-group">
			<label for="iLibelle">Libellé</label>
			<input type="text" class="form-control" value="{{ old('libelle') }}" name="libelle" id="iLibelle" required>
		</div>
		<div class="form-group">
			<label for="iDate">Date</label>
			<input type="date" class="form-control" value="{{ old('date') }}" name="date" id="iDate" required>
		</div>
		<div class="form-group">
			<label for="iHeure">Heure</label>
			<input type="time" class="form-control" value="{{ old('heure') }}" name="heure" id="iHeure" required>
		</div>
		<div class="form-group">
			<label for="iSalle">Salle</label>
			<input type="text" class="form-control" value="{{ old('salle') }}" name="salle" id="iSalle" required>
		</div>
		<div class="form-group">
			<label for="iDuree">Duree</label>
			<input type="time" class="form-control" value="{{ old('duree') }}" name="duree" id="iDuree" required>
		</div>
		<div class="form-group">
			<label for="iContenu">Contenu</label>
			<textarea class="form-control" id="iContenu" rows="15" value="{{ old('contenu') }}" name="contenu" required></textarea>
		</div>
		<button class="btn btn-success">Enregistrer</button>
		<a href="/sequences/{{ $sequence->id }}" class="btn btn-info">Retour</a>
	</form>
</div>
@endsection