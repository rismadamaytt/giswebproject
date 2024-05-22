<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SurveyQuestion;

class SurveyquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $surveyquestion = SurveyQuestion::orderBy('created_at', 'DESC')->get();
        return view('surveyquestion.index', compact('surveyquestion'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('surveyquestion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        SurveyQuestion::create($request->all());
        return redirect()->route('surveyquestion')->with('success', 'Question successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $surveyquestion = SurveyQuestion::findOrFail($id);
        return view('surveyquestion.show', compact('surveyquestion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $surveyquestion = SurveyQuestion::findOrFail($id);
        return view('surveyquestion.edit', compact('surveyquestion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $surveyquestion = SurveyQuestion::findOrFail($id);
        $surveyquestion->update($request->all());
        return redirect()->route('surveyquestion')->with('success', 'Question successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $surveyquestion = SurveyQuestion::findOrFail($id);
        $surveyquestion->delete();
        return redirect()->route('surveyquestion')->with('success', 'Question successfully deleted');
    }
}
