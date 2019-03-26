@extends('layout')

@section('title', 'Modification de séquence')

@section('header')
	<h1>Modification de séquence</h1>
@endsection

@section('content')
	@include('errors')

	<form method="POST" action="/sequences/{{ $sequence->id }}">
		@csrf
		@method("PATCH")
		<div class="form-group">
			<label for="iId" class="control-label">Id</label>
			<input type="text" class="form-control" name="id" value="{{ $sequence->id }}" id="iId" disabled>
		</div>
		<div class="form-group {{ $errors->has('libelle') ? 'has-error':'' }}">
			<label for="iLibelle" class="control-label">Libellé</label>
			<input type="text" class="form-control" name="libelle" value="{{ $sequence->libelle }}" id="iLibelle" required>
		</div>
		<div class="form-group {{ $errors->has('annee') ? 'has-error':'' }}">
			<label for="iAnnee" class="control-label">Année</label>
			<input type="number" class="form-control" name="annee" value="{{ $sequence->annee }}" id="iAnnee" required>
		</div>
		<div class="form-group {{ $errors->has('lieu') ? 'has-error':'' }}">
			<label for="iLieu" class="control-label">Lieu</label>
			<input type="text" class="form-control" name="lieu" value="{{ $sequence->lieu }}" id="iLieu" required>
		</div>
		<div class="form-group {{ $errors->has('groupe') ? 'has-error':'' }}">
			<label for="iGroupe" class="control-label">Groupe</label>
			<input type="text" class="form-control" name="groupe" value="{{ $sequence->groupe }}" id="iGroupe" required>
		</div>

		<button class="btn btn-success">Enregistrer</button>
		<a href="/sequences"><button type="button" class="btn btn-info">Retour</button></a>
	</form>
@endsection