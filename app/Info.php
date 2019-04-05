<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Info extends Model
{
    public function sequence()
    {
        return $this->belongsTo(Sequence::class);
    }
}
