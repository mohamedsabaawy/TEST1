<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class PhotoResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' =>$this->id,
            'url' =>asset(STORAGE.$this->name),
            'created_at' =>$this->created_at,
            'updated_at' =>$this->updated_at,
            'hotel_id' =>$this->hotel_id,
        ];
    }
}
