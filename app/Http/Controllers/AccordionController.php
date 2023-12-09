<?php

namespace App\Http\Controllers;

use App\Models\Accordion;
use Illuminate\Http\Request;

class AccordionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accordions = Accordion::all();
        return view('Accordion.index', compact('accordions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Accordion.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();
        Accordion::create($requestData);

        return redirect()->route('accordions.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Accordion $accordion)
    {
        return view('Accordion.show', compact('accordion'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Accordion $accordion)
    {
        return view('Accordion.edit', compact('accordion'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Accordion $accordion)
    {
        $requestData = $request->all();
        $accordion->update($requestData);

        return redirect()->route('accordions.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accordion $accordion)
    {
        $accordion->delete();
        return redirect()->route('accordions.index');
    }
}
