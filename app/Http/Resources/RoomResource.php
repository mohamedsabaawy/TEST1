<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class RoomResource extends JsonResource
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
          'id' => $this->Hotel->id,
          'created_at' => $this->created_at,
          'updated_at' => $this->updated_at,
          'name' => $this->Hotel->name,
          'email' => $this->Hotel->email,
          'cover' => ($this->Hotel->cover ? asset(STORAGE.$this->Hotel->cover) : null),
          'city_id' => $this->Hotel->city_id,
          'user_id' => $this->user_id,
          'longitude' => $this->Hotel->longitude,
          'latitude' => $this->Hotel->latitude,
          'details' => $this->Hotel->details,
          'photos' => ($this->Hotel->Photos ? PhotoResource::collection($this->Hotel->Photos) : null),
          'reviews' => ($this->Hotel->Clients ? ReviewResource::collection($this->Hotel->Clients) : null),
        ];
    }
}
