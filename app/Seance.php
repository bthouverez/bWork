<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Seance extends Model
{

    protected $guarded = [];
    
    public function sequence()
    {
    	return $this->belongsTo(Sequence::class);
    }

    public static function writeDate($date) {
    	$tab = explode(' ', $date);
		$d = explode('-', $tab[0]);
		$m = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
		$j = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
		$timestamp = mktime(0, 0, 0, $d[1], $d[2], $d[0]); //Donne le timestamp correspondant à cette date
		$res = $j[intval(date('N', $timestamp))].' '.ltrim($d[2], '0').' '.$m[intval($d[1])].' '.$d[0];
		if(isset($tab[1])) {
            $heure = explode(':', $tab[1]);
            $res .= ' à ' . ltrim($heure[0], '0') . ':'.$heure[1];
        }
		return $res;
	}

	public function panel()
	{
		if(date_create(date_create($this->date)->format('Y-m-d')) < today()) {
			return 'secondary';
		} else if(date_create(date_create($this->date)->format('Y-m-d')) > today()) {
			return 'success';
		} else {
			return 'primary';
		}
	}
}
