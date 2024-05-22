<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pemancar;

class PemancarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pemancar = Pemancar::orderBy('created_at', 'DESC')->get();
        return view('pemancar.index', compact('pemancar'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pemancar.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Pemancar::create($request->all());
        return redirect()->route('pemancar')->with('success', 'Data Pemancar successfully added');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pemancar = Pemancar::findOrFail($id);
        return view('pemancar.show', compact('pemancar'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pemancar = Pemancar::findOrFail($id);
        return view('pemancar.edit', compact('pemancar'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $pemancar = Pemancar::findOrFail($id);
        $pemancar->update($request->all());
        return redirect()->route('pemancar')->with('success', 'Data Pemancar successfully updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pemancar = Pemancar::findOrFail($id);
        $pemancar->delete();
        return redirect()->route('pemancar')->with('success', 'Data Pemancar successfully deleted');
    }
}
