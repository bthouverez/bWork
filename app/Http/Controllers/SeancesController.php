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
     * @param Sequence $sequence
     * @return \Illuminate\Http\Response
     */
    public function index(Sequence $sequence)
    {
        // équivalent au show d'une séquence
        return redirect('/sequences/'. $sequence->id);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @param Sequence $sequence
     * @return \Illuminate\Http\Response
     */
    public function create(Sequence $sequence)
    {
        return view('seances.create', compact('sequence'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Sequence $sequence
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Sequence $sequence, Request $request)
    {
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'date' => ['required', 'date'],
            'heure' => ['required', 'dateformat:H:i'],
            'salle' => ['required', 'integer'],
            'duree' => ['required', 'dateformat:H:i'],
            'contenu' => ['required', 'min:3']
        ]);

        $data['date'] .= ' '.$data['heure'];
        unset($data['heure']);
        $data['sequence_id'] = $sequence->id;

        Seance::create($data);
        return redirect('/sequences/'. $sequence->id);
    }

    /**
     * Display the specified resource.
     *
     * @param Sequence $sequence
     * @param  \App\Seance $seance
     * @return \Illuminate\Http\Response
     */
    public function show(Sequence $sequence, Seance $seance)
    {
        return view('seances.show', compact('sequence'), compact('seance'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Sequence $sequence
     * @param  \App\Seance $seance
     * @return \Illuminate\Http\Response
     */
    public function edit(Sequence $sequence, Seance $seance)
    {
        return view('seances.edit', compact('sequence'), compact('seance'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param Sequence $sequence
     * @param  \App\Seance  $seance
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sequence $sequence, Seance $seance)
    {
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'date' => ['required', 'date'],
            'heure' => ['required', 'dateformat:H:i'],
            'salle' => ['required', 'integer'],
            'duree' => ['required', 'dateformat:H:i'],
            'contenu' => ['required', 'min:3']
        ]);

        $data['date'] .= ' '.$data['heure'];
        unset($data['heure']);

        $seance->update($data);
        return redirect('/sequences/'.$sequence->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Sequence $sequence
     * @param  \App\Seance $seance
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Sequence $sequence, Seance $seance)
    {
        $seance->delete();
        return redirect('/sequences/'.$sequence->id);
    }
}
