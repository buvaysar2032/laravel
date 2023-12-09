<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Accordion;
use App\Http\Requests\StoreAccordionRequest;
use App\Http\Requests\UpdateAccordionRequest;

class AccordionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $accordion = Accordion::all();
        return response()->json($accordion);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreAccordionRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Accordion $accordion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccordionRequest $request, Accordion $accordion)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Accordion $accordion)
    {
        //
    }
}
