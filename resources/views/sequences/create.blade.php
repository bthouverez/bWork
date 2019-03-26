@extends('layout')

@section('title', 'Création de séquence')

@section('header')
	<h1>Création de séquence</h1>
@endsection

@section('content')

	@include('errors')

	<form method="POST" action="/sequences">
		@csrf
		<div class="form-group {{ $errors->has('libelle') ? 'has-error':'' }}">
			<label class="control-label" for="iLibelle">Libellé</label>
			<input type="text" class="form-control" required
				   value="{{ old('libelle') }}" name="libelle" id="iLibelle">
		</div>
		<div class="form-group {{ $errors->has('annee') ? 'has-error':'' }}">
			<label class="control-label" for="iAnnee">Année</label>
			<input type="number" class="form-control" required
				   value="{{ old('annee') }}" name="annee" id="iAnnee">
		</div>
		<div class="form-group {{ $errors->has('lieu') ? 'has-error':'' }}">
			<label class="control-label" for="iLieu">Lieu</label>
			<input type="text" class="form-control" required
				   value="{{ old('lieu') }}" name="lieu" id="iLieu">
		</div>
		<div class="form-group {{ $errors->has('groupe') ? 'has-error':'' }}">
			<label class="control-label" for="iGroupe">Groupe</label>
			<input type="text" class="form-control" required
				   value="{{ old('groupe') }}" name="groupe" id="iGroupe">
		</div>

		<button class="btn btn-success">Enregistrer</button>
		<a href="/sequences"><button type="button" class="btn btn-info">Retour</button></a>
	</form>


@endsection