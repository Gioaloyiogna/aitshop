<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class customerResource extends JsonResource
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
            "Name" => $this->Fname . $this->Lname,
            "Email" => $this->Email,
            'action' => " <button type='button' rel='tooltip' title='Edit staff'
            class='btn btn-warning  btn-sm info-btn'>
            <i class='fas fa-info'></i>
        </button>
            "

        ];
    }
}