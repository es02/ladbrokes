<?php

namespace App\Models;

use App\Models\Races;
use Illuminate\Database\Eloquent\Model;

class Meetings extends Model{

    protected $table = 'meetings';
    public $timestamps = false;

    CONST validTypes = array('Thoroughbred','Greyhound','Harness');

    public function races()
    {
        return $this->hasMany('App\Models\Races');
    }

}
