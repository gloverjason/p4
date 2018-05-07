<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Description extends Model
{
    public function days()
    {
        return $this->belongsToMany('App\Day')->withTimestamps();
    }

    /*
     * Create checkboxes based on descriptions
     */
    public static function getForCheckboxes()
    {
        $descriptions = self::orderBy('type')->get();

        $descriptionsForCheckboxes = [];
        foreach ($descriptions as $description) {
            $descriptionsForCheckboxes[$description->id] = $description->type;
        }
        return $descriptionsForCheckboxes;
    }
}
