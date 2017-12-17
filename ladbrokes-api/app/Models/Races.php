<?php

namespace App\Models;

use App\Models\Competitor;
use Illuminate\Database\Eloquent\Model;

class Races extends Model{

    protected $table = 'races';
    public $timestamps = false;

    public function competitors()
    {
        return $this->hasMany('App\Models\Competitors');
    }

    public function races()
    {
        return $this->belongsTo('App\Models\Meetings');
    }
}
