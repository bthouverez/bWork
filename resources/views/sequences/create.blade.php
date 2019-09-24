@extends('layout')

@section('title', 'Création de séquence')

@section('header')
	<h1>Création de séquence</h1>
@endsection

@section('content')

	@include('errors')

	<form method="POST" action="/sequences" enctype="multipart/form-data">
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


		<div class="form-group">
			<label for="ajoutIcal">
				<h2 id="h2Ical">Ajout de séances par calendrier ICal</h2>
			</label>
			<input type="file" class="form-control-file" name="ical" id="ajoutIcal">
		</div>

		<div class="form-check">
			<input class="form-check-input" type="checkbox" value="manual" name="ajoutSeances" id="ajoutSeances">
			<label class="form-check-label" for="ajoutSeances">
				<h2 id="h2Seances">Ajout de séances manuel</h2>
			</label>
		</div>

		<div id="divAjoutSeances">

		<select class="form-control" name="jour">
			<option>Lundi</option>
			<option>Mardi</option>
			<option>Mercredi</option>
			<option>Jeudi</option>
			<option>Vendredi</option>
		</select>

		<div class="form-group">
			<label for="iHeure">Heure</label>
			<input type="time" class="form-control" id="iHeure" name="heure" value="{{ old('heure') }}">
		</div>
		<div class="form-group">
			<label for="iDuree">Duree</label>
			<input type="time" class="form-control" id="iDuree" name="duree" value="{{ old('duree') }}">
		</div>
		<div class="form-group">
			<label for="iSalle">Salle</label>
			<input type="text" class="form-control" value="{{ old('salle') }}" name="salle" id="iSalle">
		</div>

		<div class="form-row">
				<div class="form-group col">
					<label for="iDateD">Date départ</label>
					<input type="date" class="form-control" value="{{ old('dateDepart') }}" name="dateDepart" id="iDateD">
				</div>

				<div class="form-group col">
					<label for="iDateF">Date fin</label>
					<input type="date" class="form-control" value="{{ old('dateFin') }}" name="dateFin" id="iDateF">
				</div>
		</div>
		</div>




		<button class="btn btn-success">Enregistrer</button>
		<a href="/sequences"><button type="button" class="btn btn-info">Retour</button></a>
	</form>


@endsection