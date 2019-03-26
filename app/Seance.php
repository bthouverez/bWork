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

    public function writeDate($date) {
    	$tab = explode(' ', $date);
    	$heure = explode(':', $tab[1]);
		$d = explode('-', $tab[0]);
		$m = array('', 'Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Août', 'Septembre', 'Octobre', 'Novembre', 'Décembre');
		$j = array('', 'Lundi', 'Mardi', 'Mercredi', 'Jeudi', 'Vendredi', 'Samedi', 'Dimanche');
		$timestamp = mktime(0, 0, 0, $d[1], $d[2], $d[0]); //Donne le timestamp correspondant à cette date
		return $j[intval(date('N', $timestamp))].' '.ltrim($d[2], '0').' '.$m[intval($d[1])].' '.$d[0].' à '.ltrim($heure[0], '0').' heures';
	}

	public function panel()
	{
		if(date_create(date_create($this->date)->format('Y-m-d')) < today()) {
			return 'success';
		} else if(date_create(date_create($this->date)->format('Y-m-d')) > today()) {
			return 'default';
		} else {
			return 'primary';
		}
	}
}
