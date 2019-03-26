@extends('layout')

@section('content')
<div class="container">
	<form method="POST" action="/seances">
		@csrf
		<div class="form-group">
			<label for="iLibelle">Libellé</label>
			<input type="text" class="form-control" name="libelle" id="iLibelle">
		</div>
		<div class="form-group">
			<label for="iDate">Date</label>
			<input type="date" class="form-control" name="date" id="iDate">
		</div>
		<div class="form-group">
			<label for="iHeure">Heure</label>
			<input type="time" class="form-control" name="heure" id="iHeure">
		</div>
		<div class="form-group">
			<label for="iSalle">Salle</label>
			<input type="text" class="form-control" name="salle" id="iSalle">
		</div>
		<div class="form-group">
			<label for="iDuree">Duree</label>
			<input type="time" class="form-control" name="duree" id="iDuree">
		</div>
		<div class="form-group">
			<label for="iContenu">Contenu</label>
			<textarea class="form-control" id="iContenu" rows="15" name="contenu"></textarea>
		</div>
		<button class="btn btn-success">Enregistrer</button>
	</form>
</div>
@endsection