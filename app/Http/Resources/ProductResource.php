<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
          return[
          'id' => $this->id,
            'Product_name' => $this->name,
            'Product_type' => $this->type,
            'Product_price' => $this->price,
            'Product_size' => $this->size,
            'Product_Image' => $this->image,
            'created_at' => $this->created_at,
        ];
    }
}
