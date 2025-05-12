<?php

namespace App\Http\Controllers;

use App\Models\Campus;
use App\Http\Requests\StoreCampusRequest;
use App\Http\Requests\UpdateCampusRequest;

class CampusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json(Campus::all());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCampusRequest $request)
    {
        $validated = $request->validated();

        $campus = Campus::create($validated);

        return response()->json($campus, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(Campus $campus)
    {
        return response()->json($campus);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Campus $campus)
    {
        // This method is not typically used in API controllers
        // You can return a view or JSON response if needed
        return response()->json($campus);
        // or return view('campuses.edit', compact('campus'));  
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCampusRequest $request, Campus $campus)
    {
        $validated = $request->validated();

        $campus->update($validated);

        return response()->json($campus);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Campus $campus)
    {
        //
    }
}
