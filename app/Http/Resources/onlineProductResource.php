<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class OnlineProductResource extends JsonResource
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
            "clientName" => $this->Lname . ' ' . $this->Fname,
            "Email" => $this->Email,
            "Amount" => $this->totalAmount,
            "clientId" => $this->clientId,
            "Status" => $this->Status,
            'action' => '
            <button type="button" class="btn btn-info btn-sm" rel="tooltip" title="View orders">
            <i class="fas fa-id-card-alt"></i>
        </button>
        <button type="button" class="btn btn-success btn-sm" rel="tooltip" title="Payment">
    <i class="fas fa-money-bill-wave"></i>
</button>

                
            ',
            // "acyear" => $this->acyear,
            // "semester" => $this->semester
        ];
    }
}