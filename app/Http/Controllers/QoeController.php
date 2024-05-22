<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qoedata;

class QoeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qoedata = Qoedata::orderBy('created_at', 'DESC')->get();
        return view('qoedata.index', compact('qoedata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qoedata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Qoedata::create($request->all());
        return redirect()->route('qoedata')->with('success', 'Qoe Parameter successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $qoedata = Qoedata::findOrFail($id);
        return view('qoedata.show', compact('qoedata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $qoedata = Qoedata::findOrFail($id);
        return view('qoedata.edit', compact('qoedata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $qoedata = Qoedata::findOrFail($id);
        $qoedata->update($request->all());
        return redirect()->route('qoedata')->with('success', 'Qoe Parameter successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qoedata = Qoedata::findOrFail($id);
        $qoedata->delete();
        return redirect()->route('qoedata')->with('success', 'Qoe Parameter successfully deleted');
    }
}
