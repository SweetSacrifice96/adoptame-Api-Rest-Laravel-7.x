<?php

namespace App\Http\Resources;


use Illuminate\Http\Resources\Json\JsonResource;

class Breed extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return
            [
                'name' => $this->name,
                'specie' => $this->specie
            ];
    }
}
