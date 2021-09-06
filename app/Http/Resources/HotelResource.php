<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class HotelResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
//        return $request->all();
//        return parent::toArray($request);
        return [
          'id' => $this->id,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
          'name' => $this->name,
          'email' => $this->email,
          'cover' => ($this->cover ? asset(STORAGE.$this->cover) : null),
          'city_id' => $this->city_id,
          'user_id' => $this->user_id,
          'longitude' => $this->longitude,
          'latitude' => $this->latitude,
          'details' => $this->details,
          'photos' => ($request->hotel_id ? PhotoResource::collection($this->Photos) : null),
          'reviews' => ($request->hotel_id ? ReviewResource::collection($this->Clients) : null),
        ];
    }
}
