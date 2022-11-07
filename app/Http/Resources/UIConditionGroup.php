<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class UIConditionGroup extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        if ($this->conditions->empty()) {
            return UIBehavior::collection($this->behaviors);
        } else {
            return [];
        }
    }
}
