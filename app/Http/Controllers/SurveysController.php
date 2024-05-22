<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyQuestion;
use App\Models\Survey;
use App\Models\Nilaisurvey1;

class SurveysController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveys = Survey::all();
        return view('surveys.index', compact('surveys'));
        
        $datas = [
            '1' => $surveys->where('value',1)->count(),
            '2' => $surveys->where('value',2)->count(),
            '3' => $surveys->where('value',3)->count(),
            '4' => $surveys->where('value',4)->count(),
            '5' => $surveys->where('value',5)->count(),
        ];
        return view('surveys.index', compact('datas'));

        $data1 = Survey::selectRaw('question_1, COUNT(*) as count')
                        ->groupBy('question_1')
                        ->pluck('count', 'question_1')->all();
        $surveyData1 = [];
        for ($i = 1; $i <= 5; $i++) {
            $surveyData1[$i] = $data1[$i] ?? 0;
        }
        return view('surveys.index', compact('surveyData1'));
    }

    public function form()
    {
        $value = new Nilaisurvey1();
        $data['survey1'] = $value->survey1;
        $data['survey2'] = $value->survey2;
        $data['survey3'] = $value->survey3;
        $data['survey4'] = $value->survey4;
        return view('surveys.form', $data);
    }

    public function success(){
        return view('surveys.success');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
