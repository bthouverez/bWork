@extends('layout')

@section('title', 'Séquences')

@section('header')
    <h1>bWork - Séquences</h1>
    <p>Bastien Thouverez</p>
@endsection

@section('content')
    @auth
    <p>
        <a href="/sequences/create">
            <button class="btn btn-primary">Créer séquence</button>
        </a>
    </p>
    @endauth
    <section id="sequences">
        @foreach($sequences as $s)
            <div class="card sequence mb-3 mr-2">
                <div class="card-header">
                    <a href="/sequences/{{ $s->id }}">
                        <h3 class="card-title">
                            {{ $s->libelle }} {{ $s->annee }}
                        </h3>
                    </a>
                    <div>
                    @auth
                        <form method="POST" action="/sequences/{{ $s->id }}">
                            @csrf
                            @method('DELETE')
                            <a href="/sequences/{{ $s->id }}/edit" class="btn btn-warning"></a>
                            <button class="btn btn-danger"></button>
                        </form>
                    @endauth

                    </div>
                </div>
                <div class="card-body">
                    <div class="card-text">
                        <p>{{ $s->lieu }}</p>
                        <p>{{ $s->groupe }}</p>
                    </div>
                </div>
            </div>
        @endforeach
    </section>
@endsection