<?php

namespace App\Http\Resources\Api;

use Illuminate\Http\Resources\Json\JsonResource;

class ParkResource extends JsonResource
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
            'parkUuid' => $this->getParkUuid(),
            'name' => $this->getName(),
            'yearEstablished' => $this->getYearEstablished(),
            'state' => $this->getState(),
            'lastUpdated' => $this->getLastUpdated(),
        ];
    }
}
