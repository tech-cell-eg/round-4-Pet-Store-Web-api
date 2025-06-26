<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class DogResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        
// Full texts
// id
// name
// gender
// age
// size
// color
// sku
// vaccinated
// dewormed
// cert
// microchip
// \
// add_info
// image
          return[
          'id' => $this->id,
            'Dog_Name' => $this->name,
             'Dog_gender' => $this->gender, 
             'Dog_age' => $this->age,
              'Dog_size' => $this->size, 
              'Dog_color' => $this->color, 
              'Dog_sku' => $this->sku, 
              'vaccinated Status' => $this->vaccinated, 
              'cert Status' => $this->cert, 
              'microchip Status' => $this->microchip, 
              'Extra Info' => $this->add_info, 
              'Dog_location' => $this->location,
             'Dog_Image' => $this->image,
            'created_at' => $this->created_at,
        ];
    }
}
