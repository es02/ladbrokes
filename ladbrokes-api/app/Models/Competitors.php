<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Competitors extends Model{

    protected $table = 'competitors';
    public $timestamps = false;

    public function competitors()
    {
        return $this->belongsTo('App\Models\Races');
    }
}
