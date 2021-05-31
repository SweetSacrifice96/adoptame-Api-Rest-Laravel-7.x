<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Pet extends JsonResource
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
                'id' => $this->id,
                'name' => $this->name,
                'specie' => $this->specie,
                'breed' => $this->breed,
                'birth_date' => $this->birth_date,
                'photo' => $this->photo,
                'institution' => $this->institution
            ];
    }
}
