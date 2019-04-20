@extends('layout')

@section('content')
    <div class="container">
        <h1>{{ $sequence->libelle }}{{ $sequence->annee }}</h1>
        <div class="card">
                <div class="card-header">
                    <h3 class="card-title">
                        {{ $seance->writeDate($seance->date) }}
                        ({{ ltrim(date_create($seance->duree)->format('h'), '0') }}h)

                    </h3>
                    @if($seance->salle != '')
                        <h4 class="subtitle text-muted">
                            <?php $seancealles = explode(' ', $seance->salle); ?>
                            Salle {{ $seancealles[0] }} {{ isset($seancealles[1]) ? ' puis '.$seancealles[1] : '' }}
                        </h4>
                    @endif
                </div>
            <div class="card-body">
            <div class="card-text">
                <h4>{{ $seance->libelle }}</h4>
                <div>{!! $seance->contenu !!}</div>
            </div>
            </div>
        </div>
        <br>
        @auth <a href="/sequences/{{ $sequence->id }}/seances/{{ $seance->id }}/edit" class="btn btn-warning">Editer</a> @endauth
        <a href="/sequences/{{ $sequence->id }}" class="btn btn-primary">Retour</a>
    </div>
@endsection