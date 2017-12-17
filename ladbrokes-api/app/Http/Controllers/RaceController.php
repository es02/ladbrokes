<?php

namespace App\Http\Controllers;

use \App\Models\Races;
use \App\Models\Meetings;
use Carbon\Carbon;

class RaceController extends Controller
{

    /**
     * Build output array
     * @param  Eloquent Response $races Race Data from Parent function
     * @return Array        Array of data ready to JSONify
     */
    public function buildData($races)
    {
        foreach($races as $race){
            $id = $race->meetings_id;
            $meeting = Meetings::where('id', $id)
                                 ->get();

            $data[] = array('meeting'       => $meeting[0],
                            'race'          => $race,
                            'competitors'   => $race->competitors);
        }

        return $data;
    }

    /**
     * Return 5 races that are still open sorted by closingTime asc.
     * @return JSON race data
     */
    public function index()
    {
        $races = Races::where('closeTime', '>', carbon::now())
                        ->orderBy('closeTime', 'asc')
                        ->take(5)
                        ->get();

        $data = $this->buildData($races);

        return response()->json($data);
    }

    /**
     * get race data for the specified race.
     * @param  integer $id race id
     * @return JSON race data
     */
    public function race($id)
    {
        $races = Races::where('id', $id)
                        ->take(1)
                        ->get();

        $data = $this->buildData($races);

        return response()->json($data);
    }
}
