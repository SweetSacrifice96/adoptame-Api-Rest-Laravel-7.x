<?php

namespace App\Http\Controllers;

use App\Institution;
use Illuminate\Http\Request;
use App\Http\Resources\Institution as InstitutionResource;

class InstitutionController extends Controller
{
    public function index()
    {
        return response()->json(InstitutionResource::collection(Institution::all()), 200);
    }

    public function show(Institution $institution)
    {
        return response()->json(new InstitutionResource($institution), 200);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|unique:institutions|string|max:120',
            'phone' => 'required|numeric',
            'email' => 'required|email|unique:institutions',
        ]);

        $institution = Institution::create($request->all());
        return response()->json($institution, 201);
    }

    public function update(Request $request, Institution $institution)
    {
        $institution->update($request->all());
        return response()->json($institution, 200);
    }

    public function delete(Request $request, Institution $institution)
    {
        $institution->delete();
        return response()->json(null, 204);
    }
}
