@extends('layout')

@section('title', $sequence->libelle.$sequence->annee)
@section('header')

    <p><a href="/sequences">Séquences</a> > {{ $sequence->libelle }} {{ $sequence->annee}}</p>
    <h1>{{ $sequence->libelle }} {{ $sequence->annee}}</h1>
    <?php #var_dump($datesCours); ?>
    <p>{{ $sequence->libelle }}, {{ $sequence->groupe }}</p>
    <p>{{ $sequence->seances->count() }} séances</p>
    <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
@endsection

@section('content')
	<div class="container">

    @include('sequences.headers.'.$sequence->libelle.'_'.$sequence->annee)

    @if($sequence->infos()->count())
        <h2>Informations</h2>
        @foreach($sequence->infos as $i)
            <div class="bs-callout bs-callout-{{ $i->panel }}"><h4>{{ App\Seance::writeDate($i->date) }}</h4>
            {!! $i->contenu !!}
            </div>
        @endforeach
        <hr>
    @endif

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