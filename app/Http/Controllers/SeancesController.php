<?php

namespace App\Http\Controllers;

use App\Seance;
use App\Sequence;
use Illuminate\Http\Request;

class SeancesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Sequence $sequence)
    {
        // inaccessible pour l'instant
        abort(404);

        $seances = Seance::all();
        return view('seances.index', compact('seances'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('seances.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Seance::create([
            'libelle' => $request->libelle,
            'date' => $request->date.' '.$request->heure,
            'salle' => $request->salle,
            'duree' => $request->duree,
            'contenu' => $request->contenu
        ]);
        return redirect('/seances');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Seance $seance)
    {
        return view('seances.show', compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Seance $seance)
    {
        return view('seances.edit', compact('seance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Seance $seance)
    {
        $seance->update([
            'libelle' => $request->libelle,
            'date' => $request->date.' '.$request->heure,
            'salle' => $request->salle,
            'duree' => $request->duree,
            'contenu' => $request->contenu
        ]);
        return redirect('/sequences/'.$seance->sequence->id);
        return redirect('/seances/'.$seance->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Seance $seance)
    {
        $idSeq = $seance->sequence->id;
        $seance->delete();
        return redirect('/sequences/'.$idSeq);
    }
}
