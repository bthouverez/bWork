@extends('layout')

@section('header')
    <p><a href="/sequences">Séquences</a> > {{ $sequence->libelle }}{{ $sequence->annee}}</p>
    <h1>{{ $sequence->libelle }}{{ $sequence->annee}}</h1>
    <?php #var_dump($datesCours); ?>
    <p>{{ $sequence->libelle }}, {{ $sequence->groupe }}</p>
    <p>{{ $sequence->seances->count() }} séances</p>
    <!-- <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more &raquo;</a></p> -->
@endsection

@section('content')

@include('sequences.headers.'.$sequence->libelle)

<h2>Planning<a href="/seances/create/" class="btn btn-primary">+</a></h2>
    
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
                
                <form method="post" action="/seances/{{ $s->id }}">
                    @csrf
                    @method('DELETE')
                    <a href="/seances/{{ $s->id }}" class="btn btn-primary"></a>
                    <a href="/seances/{{ $s->id }}/edit" class="btn btn-warning"></a>
                    <button class="btn btn-danger"></button>
                </form>
            </div>
            <div class="panel-body">
                <h4>{{ $s->libelle }}</h4>
                <div>{!! $s->contenu !!}</div>
            </div>
        </div>
	@endforeach
@endsection