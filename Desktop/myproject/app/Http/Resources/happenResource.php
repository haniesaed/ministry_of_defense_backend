<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class happenResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return[
            'title-en'=>$this->title-en,
            'title-ar'=>$this->title-ar,
            'desc-en'=>$this->desc-en,
            'desc-ar'=>$this->desc-ar,
            'image'=>$this->image,
            'date'=>$this->date,
    
        ];
    }
}
