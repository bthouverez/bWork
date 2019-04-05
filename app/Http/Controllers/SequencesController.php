<?php

namespace App\Http\Controllers;

use App\Sequence;
use App\Seance;
use App\Info;
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
        $an = intval(date('y'));
        $anneeScol = intval(date('m')) < 8 ? "".($an-1).$an : "".$an.($an+1);
        $sequences = Sequence::where(['annee' => $anneeScol])->get();

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
        //dd($request);
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'annee' => ['required', 'digits:4'],
            'lieu' => ['required', 'min:3'],
            'groupe' => ['required', 'min:3'],
        ]);
        $seq = Sequence::create($data);
        $filename = resource_path().'/views/sequences/headers/'.$request->libelle.'_'.$request->annee.'.blade.php';
        $filecontent = '<section class="row">'.PHP_EOL.PHP_EOL.'</section>'.PHP_EOL.'<hr>';
        file_put_contents($filename, $filecontent);

        if(isset($request->ajoutSeances)) {
            $data = $request->validate([
                'jour' => ['required'],
                'heure' => ['required'],
                'duree' => ['required'],
                'salle' => ['required'],
                'dateDepart' => ['required', 'date'],
                'dateFin' => ['required', 'date'],
            ]);


            $depart = strtotime($data['dateDepart']);
            $j = array('Lundi'=>"Monday", 'Mardi'=>'Tuesday', 'Mercredi'=>'Wednesday', 'Jeudi'=>'Thurdsay', 'Vendredi'=>'Friday', 'Samedi'=>'Saturday', 'Dimanche'=>'Sunday');
            $J = $j[$data['jour']];
            $timeCours = strtotime("next $J", $depart);
            $joursCours = date('Y-m-d', $timeCours);

            for ($ii=1; true ; $ii++) {
                Seance::create([
                    'libelle' => 'Seance '.$ii,
                    'date' => $joursCours.' '.$data['heure'],
                    'salle' => $data['salle'],
                    'duree' => $data['duree'],
                    'contenu' => '',
                    'sequence_id' => $seq->id
                ]);
                $timeCours = strtotime("next $J", $timeCours);
                $joursCours = date('Y-m-d', $timeCours);

                if($timeCours > strtotime($data['dateFin']))
                    break;
            }
        }


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

    public function addInfo(Request $request, Sequence $sequence)
    {
        $data = $request->validate([
            'infoContent' => ['required', 'min:3']
        ]);
        $tab = [];
        $tab['sequence_id'] = $sequence->id;
        $tab['contenu'] = $data['infoContent'];
        $tab['date'] = date('Y-m-d');
        $tab['panel'] = 'info';

        Info::create($tab);
        return redirect('/sequences/'.$sequence->id);
    }
}
