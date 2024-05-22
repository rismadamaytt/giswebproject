<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Qosdata;

class QosController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $qosdata = Qosdata::orderBy('created_at', 'DESC')->get();
        return view('qosdata.index', compact('qosdata'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('qosdata.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Qosdata::create($request->all());
        return redirect()->route('qosdata')->with('success', 'Qos Parameter successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $qosdata = Qoedata::findOrFail($id);
        return view('qosdata.show', compact('qosdata'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $qosdata = Qosdata::findOrFail($id);
        return view('qosdata.edit', compact('qosdata'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $qosdata = Qosdata::findOrFail($id);
        $qosdata->update($request->all());
        return redirect()->route('qosdata')->with('success', 'Qos Parameter successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $qosdata = Qosdata::findOrFail($id);
        $qosdata->delete();
        return redirect()->route('qosdata')->with('success', 'Qos Parameter successfully deleted');
    }
}
