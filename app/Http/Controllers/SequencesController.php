<?php

namespace App\Http\Controllers;

use App\Sequence;
use App\Seance;
use App\Info;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Liliumdev\ICalendar\ZCiCal;

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
       // if(Auth::check())
            $sequences = Sequence::all()->groupby('annee')->sort();
       // else
           // $sequences = array($anneeScol => Sequence::where(['annee' => $anneeScol])->get());

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
        if(!Auth::check()) abort(401);
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
        if(!Auth::check()) abort(401);
        $data = $request->validate([
            'libelle' => ['required', 'min:3'],
            'annee' => ['required', 'digits:4'],
            'lieu' => ['required', 'min:3'],
            'groupe' => ['required', 'min:3'],
        ]);
        $seq = Sequence::create($data);

        // ICAL file given
        if($request->files->count()) {

            $icalstring = file_get_contents($request->file('ical')->getRealPath());
            $icalobj = new ZCiCal($icalstring);

            foreach($icalobj->tree->child as $node)
            {
                if($node->getName() == "VEVENT")
                {
                    $s = [];
                    $fields = ["DTSTART", "DTEND", "LOCATION", "SUMMARY"];
                    // Getting seance data from file
                    foreach($node->data as $key => $value)	{
                        if(in_array($key, $fields))	{
                            $s[$key] = $value->getValues();
                        }
                    }

                    // Creating bWork data
                    $seance = new Seance();
                    $seance->sequence_id = $seq->id;
                    $date = new \DateTime($s['DTSTART']);
                    $seance->duree = date_diff($date, new \DateTime($s['DTEND']))->format('%H:%I:%S');
                    $date->add(new \DateInterval('PT2H'));
                    $seance->date = $date->format('Y-m-d H:i:s');
                    $seance->libelle = $s['SUMMARY'];
                    $seance->salle = intval(substr($s['LOCATION'], 1));
                    $seance->contenu = '';
                    $seance->save();


                }
            }

        // semi-auto seance filler
        } else if(isset($request->ajoutSeances)) {
            $data = $request->validate([
                'jour' => ['required'],
                'heure' => ['required', 'dateformat:H:i'],
                'duree' => ['required', 'dateformat:H:i'],
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


        return redirect('/sequences/'.$seq->id);
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Sequence  $sequence
     * @return \Illuminate\Http\Response
     */
    public function edit(Sequence $sequence)
    {
        if(!Auth::check()) abort(401);
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
        if(!Auth::check()) abort(401);
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
        if(!Auth::check()) abort(401);
        $filepath = resource_path().'/views/sequences/headers/'.$sequence->libelle.'_'.$sequence->annee.'.blade.php';
        if(file_exists($filepath))
            unlink($filepath);
        $sequence->delete();
        return redirect('/sequences');
    }

    public function addInfo(Request $request, Sequence $sequence)
    {
        if(!Auth::check()) abort(401);
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
