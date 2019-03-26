@extends('layout')

@section('title', 'Modification de séquence')

@section('header')
	<h1>Modification de séquence</h1>
@endsection

@section('content')
	<form method="POST" action="/sequences">
		@csrf
		@method("PATCH")
		<div class="form-group">
			<label for="iLibelle">Libellé</label>
			<input type="text" class="form-control" name="libelle" value="{{ $sequence->libelle }}" id="iLibelle">
		</div>
		<div class="form-group">
			<label for="iAnnee">Année</label>
			<input type="text" class="form-control" name="annee" value="{{ $sequence->annee }}" id="iAnnee">
		</div>
		<div class="form-group">
			<label for="iLieu">Lieu</label>
			<input type="text" class="form-control" name="lieu" value="{{ $sequence->lieu }}" id="iLieu">
		</div>
		<div class="form-group">
			<label for="iGroupe">Groupe</label>
			<input type="text" class="form-control" name="groupe" value="{{ $sequence->groupe }}" id="iGroupe">
		</div>

		<button class="btn btn-success">Enregistrer</button>
		<a href="/sequences"><button type="button" class="btn btn-info">Retour</button></a>
	</form>
@endsection