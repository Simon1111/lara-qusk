<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Company extends JsonResource
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
            'name' => $this->name,
            'shows' => $this->shows,
            'click' => $this->click,
            'ctr' => $this->ctr,
            'expense' => $this->expense,
            'limit' => $this->limit,
            'price' => $this->price,
            'status' => $this->status,
        ];
    }
}
