<?php

namespace App\Http\Controllers;

use App\Models\Carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::all();
        return view('Carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $fileName = time() . '_' . $file->getClientOriginalName(); // Unique filename
            $destinationPath = 'storage/carousel';
            $file->move($destinationPath, $fileName);
            $requestData['img'] = $fileName;
        } else {
            $requestData['img'] = 'nofoto.jpg';
        }

        Carousel::create($requestData);

        return redirect()->route('carousel.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Carousel $carousel)
    {
        return view('Carousel.show', compact('carousel'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Carousel $carousel)
    {
        return view('Carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Carousel $carousel)
    {
        $requestData = $request->all();

        if ($request->hasFile('img')) {
            $file = $request->file('img');
            $destinationPath = 'storage/carousel';
            $file->move($destinationPath, $file->getClientOriginalName());
            $requestData['img'] = $file->getClientOriginalName();
        } else {
            $requestData['img'] = $carousel->img;
        }

        $carousel->update($requestData);

        return redirect()->route('carousel.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Carousel $carousel)
    {
        $carousel->delete();
        return redirect()->route('carousel.index');
    }
}
