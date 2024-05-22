<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Survey;

class SurveylistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveylist = Survey::orderBy('created_at', 'DESC')->get();
        return view('surveylist.index', compact('surveylist'));
    }
 
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Survey::create($request->all());
        return redirect()->route('surveys.success')->with('success', 'A new data added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $surveylist = Survey::findOrFail($id);
        return view('surveylist.show', compact('surveylist'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surveylist = Survey::findOrFail($id);
        $surveylist->delete();
        return redirect()->route('surveylist')->with('success', 'Survey successfully deleted');
    }
}
