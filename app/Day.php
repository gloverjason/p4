<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Day extends Model
{
    public function descriptions()
    {
        return $this->belongsToMany('App\Description')->withTimestamps();
    }
}