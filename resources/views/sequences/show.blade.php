@extends('layout')

@section('title', $sequence->libelle.$sequence->annee)
@section('header')

    <p><a href="/sequences">Séquences</a> > {{ $sequence->libelle }}{{ $sequence->annee}}</p>
    <h1>{{ $sequence->libelle }}{{ $sequence->annee}}</h1>
    <?php #var_dump($datesCours); ?>
    <p>{{ $sequence->libelle }}, {{ $sequence->groupe }}</p>
    <p>{{ $sequence->seances->count() }} séances</p>
    <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
@endsection

@section('content')
	<div class="container">

    @include('sequences.headers.'.$sequence->libelle)


{{-- <h2>Informations</h2>
    <div class="bs-callout bs-callout-danger"><h4>Lundi 26 Novembre 2018</h4>
    Le cours du mercredi 28 Novembre sera annulé et sera reporté le
      <ul>
      <li>Vendredi 7 Décembre, 8h-10h, Salle 24</li>
    </ul>
    Je vous prie d'excuser ce nouveau changement.
  </div>
    <div class="bs-callout bs-callout-success"><h4>Samedi 6 Octobre 2018</h4>
    Les créneaux de rattrapages des cours annoncés ont été confirmés et devraient être ajouté à votre emploi du temps.
      <ul>
      <li>Vendredi 30 Novembre, 8h-10h, Salle 16</li>
      <li>Vendredi 14 Décembre, 8h-10h, Salle 16</li>
    </ul>
  </div>
      <div class="bs-callout bs-callout-info"><h4>Mardi 2 Octobre 2018</h4>Je vous prie de m'excuser pour mes absences des deux dernières semaines. Les deux cours manqués seront rattrapés, probablemement les vendredi 30 Novembre et 14 Décembre. Information à confirmer.</div>
      <hr> --}}
        <a href="/sequences/{{ $sequence->id }}/seances/create/" class="btn btn-primary">Ajouter séance</a>
<h2>Planning</h2>
    <section id="seances">
	@foreach($sequence->seances->sortBy('date') as $s)
        <div class="panel panel-{{ $s->panel() }} seance">
            <div class="panel-heading">
                {{-- <a href="/seances/{{ $s->id }}"> --}}
                    <h3 class="panel-title">
                        {{ $s->writeDate($s->date) }} 
                        ({{ ltrim(date_create($s->duree)->format('h'), '0') }}h)
                        @if($s->salle != '')
                        ,
                        <?php $seancealles = explode(' ', $s->salle); ?>
                        Salle {{ $seancealles[0] }} {{ isset($seancealles[1]) ? ' puis '.$seancealles[1] : '' }}
                        @endif
                    </h3>
                {{-- </a> --}}
                
                <form method="post" action="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}">
                    @csrf
                    @method('DELETE')
                    <a href="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}" class="btn btn-primary"></a>
                    <a href="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}/edit" class="btn btn-warning"></a>
                    <button class="btn btn-danger"></button>
                </form>
            </div>
            <div class="panel-body">
                <h4>{{ $s->libelle }}</h4>
                <div>{!! $s->contenu !!}</div>
            </div>
        </div>
	@endforeach
    </section>
</div>
@endsection