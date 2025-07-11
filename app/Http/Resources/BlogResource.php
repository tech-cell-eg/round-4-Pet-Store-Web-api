<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class BlogResource extends JsonResource
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
            'Blog_Title' => $this->title,
            'Blog_Paragraph' => $this->paragraph,
            'Blog_Image' => $this->image,
            'created_at' => $this->created_at,
        ];
    }
}
