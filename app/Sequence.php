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

    public function infos()
    {
        return $this->hasMany(Info::class);
    }
}
