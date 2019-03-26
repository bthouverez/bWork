<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sequence extends Model
{
    protected $guarded = [];

    public function seances()
    {
    	return $this->hasMany(Seance::class);
    }
}
