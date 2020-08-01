<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Rental extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        $parent =  parent::toArray($request);
        $data["customer"] = $this->Customer();
        $data["car"] = $this->Car();
        $data = array_merge($parent, $data);

        return $data;
    }
}
