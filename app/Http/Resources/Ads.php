<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Ads extends JsonResource
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
            'company' => $this->company_id,
            'text' => $this->text,
            'title' => $this->title,
            'image' => $this->image,
            'shows' => $this->shows,
            'click' => $this->click,
            'limit' => $this->limit,
            'lid' => $this->lid,
            'ctr' => $this->ctr,
            'cpm' => $this->cpm,
            'price' => $this->price,
            'status' => $this->status
        ];
    }
}
