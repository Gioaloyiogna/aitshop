<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class viewProductResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            "productName" => $this->Name,
            "productPrice" => $this->Price,
        ];
    }
}