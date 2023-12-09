<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Carousel;
use App\Http\Requests\StoreCarouselRequest;
use App\Http\Requests\UpdateCarouselRequest;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousel = Carousel::all();
        return response()->json($carousel);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCarouselRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarouselRequest $request, Carousel $carousel)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        //
    }
}
