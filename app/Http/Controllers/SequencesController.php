<?php

namespace App\Http\Controllers;

use App\Sequence;
use Illuminate\Http\Request;

class SequencesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sequences = Sequence::all();
        return view('sequences.index', compact('sequences'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Sequence  $sequence
     * @return \Illuminate\Http\Response
     */
    public function show(Sequence $sequence)
    {
        return view('sequences.show', compact('sequence'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sequences.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'annee' => ['required', 'digits:4'],
            'lieu' => ['required', 'min:3'],
            'groupe' => ['required', 'min:3'],
        ]);
        Sequence::create($data);
        $filename = resource_path().'/views/sequences/headers/'.$request->libelle.'_'.$request->annee.'.blade.php';
        $filecontent = '<section class="row">'.PHP_EOL.PHP_EOL.'</section>'.PHP_EOL.'<hr>';
        file_put_contents($filename, $filecontent);
        return redirect('/sequences');
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sequence  $sequence
     * @return \Illuminate\Http\Response
     */
    public function edit(Sequence $sequence)
    {
        return view('sequences.edit', compact('sequence'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Sequence  $sequence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Sequence $sequence)
    {
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'annee' => ['required', 'digits:4'],
            'lieu' => ['required', 'min:3'],
            'groupe' => ['required', 'min:3'],
        ]);
        $sequence->update($data);
        return redirect('/sequences');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Sequence $sequence
     * @return \Illuminate\Http\Response
     * @throws \Exception
     */
    public function destroy(Sequence $sequence)
    {
        unlink(resource_path().'/views/sequences/headers/'.$sequence->libelle.'_'.$sequence->annee.'.blade.php');
        $sequence->delete();
        return redirect('/sequences');
    }
}
