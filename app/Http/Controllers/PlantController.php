<?php

namespace App\Http\Controllers;

use App\Models\Plant;
use Illuminate\Http\Request;
use App\Http\Requests\PlantRequest;
use Illuminate\Support\Facades\Log;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $plants = Plant::all();
        return view('welcome', compact('plants'));
        // return $plants;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('plants.create'); 
      
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PlantRequest  $request, Plant $plant)
    {
        //
        $validatedRequest = $request->validated();

        $plant->create([
            'common_name' => $validatedRequest['common_name'],
            'genus' => $validatedRequest['genus'],
            'species' => $validatedRequest['species'],
            'user_id' => $validatedRequest['user_id'],
            'img' => $validatedRequest['img'],
        ]);

        return redirect()->route('plant.index');
        // return $plant;

    }

    /**
     * Display the specified resource.
     */
    public function show(Plant $plant)
    {
        //
        return view('plants.show', compact('plant'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Plant $plant)
    {
        //
        return view('plants.edit', compact('plant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(PlantRequest $request, Plant $plant)
    {
        //
        $validatedRequest = $request->validated();

        $plant->update([
            'common_name' => $validatedRequest['common_name'],
            'genus' => $validatedRequest['genus'],
            'species' => $validatedRequest['species'],
            'user_id' => $validatedRequest['user_id'],
            'img' => $validatedRequest['img'],
        ]
        );

        return redirect()->route('plant.index')->with('success','Updated successfully');
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Plant $plant)
    {
        //
        $plant->delete(); 
        return redirect()->route('plant.index')->with('success','Deleted Successfully');

    }
}
