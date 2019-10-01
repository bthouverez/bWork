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
        @foreach($sequences as $anneescol => $seqs)
            <h2>20{{ substr($anneescol, 0,2) }}/20{{ substr($anneescol, 2) }}</h2>
            <section class="sequences">
            @foreach($seqs as $s)
            <div class="card sequence mb-3 mr-2">
                <div class="card-header">
                    <a href="/sequences/{{ $s->id }}">
                        <h3 class="card-title">
                            {{ $s->libelle }}
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
                        <table class="table">
                            <tr>
                                <th>Lieu</th>
                                <td>{{ $s->lieu }}</td>
                            </tr>
                            <tr>
                                <th>Groupe</th>
                                <td>{{ $s->groupe }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            @endforeach
            </section>

        @endforeach
@endsection