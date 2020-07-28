<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {

        return ([
            'id' => $this->id,
            'name' => $this->name,
            'price' => $this->price,
            'image' => $this->image,
            'long_description' => $this->long_description,
            'details' => $this->details,
            'created_at' => $this->created_at,
            'users' => $this->users,
        ]);
        //return parent::toArray($request);
    }
}
