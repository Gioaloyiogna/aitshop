<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class physicalProductResource extends JsonResource
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
            "Tag" => $this->basketTag,
            "Price" => $this->Amount,
            "Status" => $this->Status,
            'action' => " <button type='button' rel='tooltip' title='Edit staff'
                class='btn btn-warning  btn-sm info-btn'>
                <i class='fas fa-info'></i>
            </button>
            
           
            <button type='button' href='#' class='btn btn-info btn-sm' rel='tooltip' title='View staffs list'>
                <i class='fas fa-id-card-alt'></i>
            </button>     ",

        ];
    }
}