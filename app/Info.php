<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
	protected $guarded = [];

    public function sequence()
    {
        return $this->belongsTo(Sequence::class);
    }
}
