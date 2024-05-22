<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Location;

class MapController extends Controller
{
    
    public function map(){
        $locations = Location::all();
        return view('map', compact('locations'));

        $data1 = Survey::selectRaw('question_1, COUNT(*) as count')
                        ->groupBy('question_1')
                        ->pluck('count', 'question_1')->all();
        $surveyData1 = [];
        for ($i = 1; $i <= 5; $i++) {
            $surveyData[$i] = $data[$i] ?? 0;
        }
        return view('map', compact('surveyData1'));
    }

    public function getLocation(){
        $data=$this->db->get('locations')->result();
        echo json_encode($data);
    }
}
