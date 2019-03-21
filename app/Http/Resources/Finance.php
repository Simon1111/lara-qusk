<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Finance extends JsonResource
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
            'id' => $this->id,
            'ssp' => $this->ssp,
            'expenseDsp' => $this->expenseDsp,
            'expenseSsp' => $this->expenseSsp,
            'rates' => $this->rates,
            'date' => $this->created_at->format('Y-m-d')
        ];
    }
}
