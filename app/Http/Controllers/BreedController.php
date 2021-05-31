<?php

namespace App\Http\Controllers;

use App\Breed;
use App\Http\Resources\Breed as BreedResource;
use Illuminate\Http\Request;

class BreedController extends Controller
{
    public function index()
    {
        return response()->json(BreedResource::collection(Breed::all()), 200);
    }
}
