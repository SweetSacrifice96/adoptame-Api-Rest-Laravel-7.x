<?php

namespace App\Http\Controllers;


use App\Pet;
use App\Http\Resources\Pet as PetResourse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PetController extends Controller
{
    public function index()
    {
        return response()->json(PetResourse::collection(Pet::all()), 200);
    }

    public function show(Pet $pet)
    {
        return response()->json(new PetResourse($pet), 200);
    }



    public function store(Request $request)
    {

        $messages = [
            'specie.exists' => 'Solo se acepta el Registro de Gato o Perro.',
            'breed.exists' => 'Esta raza no existe en la lista de Especies, consulta: http://127.0.0.1:8000/api/breeds'
        ];
        $validatedData = $request->validate([
            'name' => 'required|string|max:100',
            'breed' => 'required|string|exists:breeds,name',
            'specie' => 'required|exists:breeds,specie',
            'photo' =>  'image',
            'birth_date' => 'string|size:5|date_format:m/y|before_or_equal:today',
            'institution' => 'required|exists:institutions,name',
        ], $messages);

        $pet = new Pet($request->all());
        $path = $request->photo->store('public/pets');
        $pet->photo = $path;
        $pet->save();

        //$pet = Pet::create($request->all());
        return response()->json(new PetResourse($pet) , 201);
    }

    public function update(Request $request, Pet $pet)
    {
        $pet->update($request->all());
        return response()->json($pet, 200);
    }

    public function delete(Request $request, Pet $pet)
    {
        $pet->delete();
        return response()->json(null, 204);
    }



}
