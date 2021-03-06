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
    @if(file_exists(resource_path('/views/sequences/headers/'.$sequence->libelle.'.blade.php')))
        @include('sequences.headers.'.$sequence->libelle)
    @endif

    <h2>Informations</h2>
    @auth
    <form method="post" action="/sequences/{{ $sequence->id }}/infos">
        @csrf
        <div class="form-row">
            <textarea class="col-10 mr-3 form-control" name="infoContent" required></textarea>
            <button class=" col btn btn-primary">Ajouter</button>
        </div>
    </form>
    @endauth

    @if($sequence->infos()->count())
        @foreach($sequence->infos as $i)
            <div class="bs-callout bs-callout-{{ $i->panel }}"><h4>{{ App\Seance::writeDate($i->date) }}</h4>
            {!! $i->contenu !!}
            </div>
        @endforeach
    @endif
    <hr>

    
    <h2>Planning
        @auth
        <a href="/sequences/{{ $sequence->id }}/seances/create/" class="btn btn-primary">Ajouter séance</a>
        @endauth
    </h2>
    <section id="seances">
  @foreach($sequence->seances->sortBy('date') as $s)
        <div class="card seance mb-3 border-{{ $s->panel() }}">
            <div class="card-header bg-{{ $s->panel() }}">
                <a href="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}" class="text-white">
                    <h4 class="card-title">
                        {{ $s->writeDate($s->date) }} 
                        ({{ ltrim(date_create($s->duree)->format('h'), '0') }}h)
                        @if($s->salle != '')
                            -
                        <?php $seancealles = explode(' ', $s->salle); ?>
                        Salle {{ $seancealles[0] }} {{ isset($seancealles[1]) ? ' puis '.$seancealles[1] : '' }}
                        @endif
                    </h4>
                 </a>

                @auth
                <form method="post" action="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}">
                    @csrf
                    @method('DELETE')
{{--                    <a href="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}" class="btn btn-primary"></a>--}}
                    <a href="/sequences/{{ $sequence->id }}/seances/{{ $s->id }}/edit" class="btn btn-warning"></a>
                    <button class="btn btn-danger"></button>
                </form>
                @endauth
            </div>
            <div class="card-body">
                <h4>{{ $s->libelle }}</h4>
                <div>{!! $s->contenu !!}</div>
            </div>
        </div>
  @endforeach
    </section>
</div>
@endsection